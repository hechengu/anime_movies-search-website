<!-- This file is used to delete the database Animated_Movie -->
<!-- Not recommend to do this until you want to delete the entire project -->

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

// Deleting the database ANIMATED_MOVIE
$sql = "DROP DATABASE ANIMATED_MOVIE";

if (mysqli_query($conn, $sql)) {
    echo "Database ANIMATED_MOVIE has been deleted successfully";
} else {
    die('Error creating database: ' . mysqli_error($conn));
}

// closing connection
mysqli_close($conn);
?>

