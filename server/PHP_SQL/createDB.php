<!-- This file is used to create the database Animated_Movie -->

<?php
$servername = "localhost";
$username = "guangguang";
$password = "911GT3RS";

// Creating connection
$conn = mysqli_connect($servername, $username, $password);
// Checking connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Creating a database named ANIMATED_MOVIE
$sql = "CREATE DATABASE ANIMATED_MOVIE";

if (mysqli_query($conn, $sql)) {
    echo "Database created successfully with the name ANIMATED_MOVIE";
} else {
    die('Error creating database: ' . mysqli_error($conn));
}

// closing connection
mysqli_close($conn);
?>
