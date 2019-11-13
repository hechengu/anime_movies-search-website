<!-- This file is used to delete the table JPN-Movie -->
<!-- Not recommend to do this until you want to delete the entire project or you want to start another project -->

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

$sql = "DROP TABLE 2019_tbl";
mysqli_select_db( $conn, 'ANIMATED_MOVIE' );

if (mysqli_query($conn, $sql)) {
    echo "Table 2019_tbl deleted successfully";
} else {
    die('Error deleting table: ' . mysqli_error($conn));
}

// closing connection
mysqli_close($conn);
?>

