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
?>
<?php header('Content-type: application/xml; charset="ISO-8859-1"',true);?>


<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

<?php while($row = $result->fetch_assoc()){ ?>

<url>
	<loc><?php echo 'http://localhost/xml-php/' .$row['id']; ?></loc>
	<loc><?php echo 'http://localhost/xml-php/' .$row['date']; ?></loc>
	<loc><?php echo 'http://localhost/xml-php/' .$row['mnumber']; ?></loc>
	<loc><?php echo 'http://localhost/xml-php/' .$row['longitude']; ?></loc>
	<loc><?php echo 'http://localhost/xml-php/' .$row['latitude']; ?></loc>
</url>

<?php } ?>
<?php

$conn->close();

?>
</urlset>