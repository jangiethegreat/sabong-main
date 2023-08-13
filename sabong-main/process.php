<?php
include("dbcon.php"); // Include database connection

if (isset($_POST['add'])) {
    // Perform insert operation
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $fullname = $_POST['fullname'];
    $level = $_POST['level'];
    $status = $_POST['status'];

    $sql = "INSERT INTO users (username, password, fullname, level, status)
            VALUES ('$username', '$password', '$fullname', '$level', '$status')";

    if ($conn->query($sql) === TRUE) {
        header("Location: display_users.php");
        exit();
    }
}

if (isset($_POST['edit'])) {
    // Perform update operation
    $id = $_POST['id'];
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $level = $_POST['level'];
    $status = $_POST['status'];

    $sql = "UPDATE users SET username='$username', fullname='$fullname',
            level='$level', status='$status' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        header("Location: display_users.php");
        exit();
    }
}

$conn->close();
