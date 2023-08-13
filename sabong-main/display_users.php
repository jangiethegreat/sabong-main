<!DOCTYPE html>
<html>

<head>
    <title>User List</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="mt-4">User List</h1>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Full Name</th>
                    <th>Level</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("dbcon.php");

                $sql = "SELECT * FROM users";
                $result = $conn->query($sql);

                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row['id'] . "</td>
                            <td>" . $row['username'] . "</td>
                            <td>" . $row['fullname'] . "</td>
                            <td>" . $row['level'] . "</td>
                            <td>" . $row['status'] . "</td>
                            <td>
                                <a class='btn btn-primary btn-sm' href='users.php?id=" . $row['id'] . "'>Edit</a>
                                <a class='btn btn-danger btn-sm' href='delete.php?id=" . $row['id'] . "'>Delete</a>
                            </td>
                          </tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
    <!-- Include Bootstrap JS (Optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>