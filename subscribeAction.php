<?php
session_start();

if (!isset($_SESSION['userId'])) {
    header("Location: login.php");
    exit();
}

include 'admin/database/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Check if the subscriber with the same email already exists
    $checkQuery = "SELECT * FROM subscribers WHERE email = '$email'";
    $result = mysqli_query($conn, $checkQuery);

    if (mysqli_num_rows($result) > 0) {
        echo 'You are already subscribed.';
    } else {
        // Insert subscriber into the database
        $insertQuery = "INSERT INTO subscribers (name, email) VALUES ('$name', '$email')";
        
        if (mysqli_query($conn, $insertQuery)) {
            echo 'Thank you for subscribing.';
        } else {
            echo 'Error: ' . mysqli_error($conn);
        }
    }
    mysqli_free_result($result);
}

$conn->close();
?>
