<!DOCTYPE html>
<html>

<head>
    <title>Arena Fights</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Arena Fights</h2>
        <br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Fight ID</th>
                    <th>Event ID</th>
                    <th>Fight Number</th>
                    <th>Date</th>
                    <th>Meron Total Bet</th>
                    <th>Wala Total Bet</th>
                    <th>Plasada Total</th>
                    <th>Winner</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="fightTable">
                <!-- populate with PHP function call -->
                <?php
                include("fights_functions.php");
                echo getFightsData();
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            // Add click event listener to Meron and Wala buttons
            $(document).on("click", ".meronBtn, .walaBtn", function() {
                var fight_id = $(this).data("id");
                var winner = $(this).hasClass("meronBtn") ? "Meron" : "Wala";
                var status = "completed";

                // Send the AJAX request
                $.ajax({
                    url: "fights_functions.php",
                    type: "POST",
                    data: {
                        action: "update",
                        fight_id: fight_id,
                        winner: winner,
                        status: status
                    },
                    success: function(response) {
                        // Update the UI as needed (e.g., change the color of the button or refresh the table)
                        // Here, you can update the button text or status column in the table
                        // For example, if you have the ID of the button element, you can do something like this:
                        // $("#button-" + fight_id).text(winner); // Update the button text
                        // $("#status-" + fight_id).text(status); // Update the status column in the table

                        // If the above approach doesn't suit your structure, you can refresh the table
                        // to fetch the updated data from the server:
                        fetchFightsData();
                    },
                    error: function(xhr, status, error) {
                        console.log("Error updating record: " + error);
                    }
                });
            });

            // Function to fetch updated fights data and refresh the table
            function fetchFightsData() {
                $.ajax({
                    url: "fights_functions.php",
                    type: "POST",
                    data: {
                        action: "fetch"
                    },
                    success: function(response) {
                        $("#fightTable").html(response);
                    },
                    error: function(xhr, status, error) {
                        console.log("Error fetching fights data: " + error);
                    }
                });
            }
        });
    </script>
</body>

</html>