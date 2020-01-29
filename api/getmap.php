<?php
	include("dbcon.php");

	$SQL = "SELECT * FROM GMAP";

	$query = mysqli_query($dbh, $SQL);
	while($dt=mysqli_fetch_array($query)){
		$data[] = array(
			"id"=>$dt["id"],
			"waktu"=>$dt["waktu"],
			"latitude"=>$dt["latitude"],
			"longitude"=>$dt["longitude"]
			);
	}

	$json = array(
		'result' => 'success',
		'data' => $data
		);

	echo json_encode($json);
?>