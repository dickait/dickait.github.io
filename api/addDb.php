<?php
	include("dbcon.php");
	
	$lat = $_GET['latitude'];
	$lng = $_GET['longitude'];
	
	$SQL = "INSERT INTO GMAP (latitude, longitude) VALUES ('$lat','$lng')";
	
	mysqli_query($dbh, $SQL);

?>

