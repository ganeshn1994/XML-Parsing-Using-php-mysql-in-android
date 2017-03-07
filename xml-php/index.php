<?php # Script 9.2 - mysqli_connect.php
// This file contains the database access information.
// This file also establishes a connection to MySQL,
// selects the database, and sets the encoding.

// Set the database access information as constants:
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sos";

// Make the connection:
$conn = new mysqli ($servername , $username, $password, $dbname) ;

$sql = "SELECT * FROM sos";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()){

	echo $row["mnumber"].'<br>' .$row['latitude'] .'<br>' .$row['longitude'] .'<br>' .$row['date'] .'<br>' .$row['id'].'<br>';
}

$conn->close();

?>