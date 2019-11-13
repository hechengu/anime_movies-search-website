<!-- This file is used to create the table 2019 -->

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

$sql = "CREATE TABLE 2019_tbl( ".
        "id int NOT NULL AUTO_INCREMENT, ".
        "Name varchar(80) NOT NULL, ".
        "Directed_by varchar(30) NOT NULL, ".
        "Produced_company varchar(75) NOT NULL, ".
        "Released_date varchar(30) NOT NULL, ".
        "Running_time int NOT NULL, ".
        "Genre varchar(30) NOT NULL, ".
        "Language varchar(20) NOT NULL, ".
        "IMDb decimal(2,1) NOT NULL, ".
        "Poster varchar(300) NOT NULL, ".
        "Plot varchar(3000) NOT NULL, ".
        "Link varchar(75) NOT NULL, ".
        "Wiki varchar(150) NOT NULL, ".
	"Trailer varchar(100) NOT NULL, ".
        "PRIMARY KEY (id ))ENGINE=InnoDB DEFAULT CHARSET=utf8; ";

mysqli_select_db($conn, 'ANIMATED_MOVIE' );

if (mysqli_query($conn, $sql)) {
    echo "Table created successfully with the name 2019";
} else {
    die('Error creating table: ' . mysqli_error($conn));
}

// closing connection
mysqli_close($conn);
?>
