<?php

	$servername = "localhost";
	$username = "id17415144_abddarshan";
	$password = "7*>g#Tng6l]^0wlX";
	$dbname = "id17415144_abdbank";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>