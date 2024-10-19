<?php
session_start();
include 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];
$error = '';

// Query to check the user credentials
$sql = "SELECT * FROM `users` WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Login successful
    $_SESSION['username'] = $username;
    header("Location: HomePage.php");
    exit();
} else {
    // Login failed, set an error message
    $error = 'Invalid username or password';
    // Redirect back to the login page with the error message
    header("Location: index.php?error=" . urlencode($error));
    exit();
}
?>
