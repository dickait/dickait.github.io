<?php
$servername = "localhost";
$username = "dickaari_user";
$password = "%Uz(MnP+O1w?";
$my_db = "dickaari_db";

// Create connection
$dbh = mysqli_connect($servername, $username, $password,$my_db);
$selected = mysqli_select_db($dbh, "dickaari_db");

// Check connection
if (!$dbh) {
    die("Connection failed: " . mysqli_connect_error());
}

?>