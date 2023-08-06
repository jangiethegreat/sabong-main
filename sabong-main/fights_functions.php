<?php
include("dbcon.php");

// Function to get fights data
// Function to get fights data
function getFightsData()
{
    global $conn;
    $data = '';

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM fights WHERE status = 'pending'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data .= "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["event_id"] . "</td>
                <td>" . $row["fight_no"] . "</td>
                <td>" . $row["date"] . "</td>
                <td>" . $row["meron_total_bet"] . "</td>
                <td>" . $row["wala_total_bet"] . "</td>
                <td>" . $row["plasada_total"] . "</td>
                <td>" . $row["winner"] . "</td>
                <td>" . $row["status"] . "</td>
                <td>";

            if ($row["status"] !== "completed") {
                // Show the buttons if the status is not completed
                $data .= "
                    <form method='post'>
                        <input type='hidden' name='fight_id' value='" . $row["id"] . "'>
                        <button class ='btn btn-primary' type='submit' name='action' value='meron'>Meron</button>
                        <button class ='btn btn-danger' type='submit' name='action' value='wala'>Wala</button>
                    </form>";
            }

            $data .= "</td>
            </tr>";
        }
    } else {
        $data .= "
            <tr>
                <td colspan='10'>No fights found</td>
            </tr>
        ";
    }

    return $data;
}


// Function to handle the update when Meron or Wala button is clicked
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["action"]) && isset($_POST["fight_id"])) {
        $action = $_POST["action"];
        $fight_id = $_POST["fight_id"];

        // Update the fight's winner and status in the database
        $winner = ($action === 'meron') ? 'Meron' : 'Wala';
        $status = 'completed';

        // Prepare and execute the UPDATE query
        $sql = "UPDATE fights SET winner='$winner', status='$status' WHERE id='$fight_id'";

        if ($conn->query($sql) === TRUE) {
            // Redirect back to the main page after updating the data (change "fights.php" to your actual main page file)
            header("Location: fights.php");
            exit;
        } else {
            die("Error updating record: " . $conn->error);
        }
    }
    $conn->close();
}
