<?php
include("dbcon.php"); // Include database connection

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM users WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        header("Location: display_users.php");
        exit();
    }
}

$conn->close();
