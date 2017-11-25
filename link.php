<?php

function openCon()
{
	$dbhost="localhost";
	$dbuser="root";
	$dbpass="mysql";
	$db="iwp";
	
	$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
	
	if(!$conn)
		die("connection failed: ".mysqli_error());
	
	return $conn;
}

function closeCon($conn)
{
	mysqli_close($conn);
}

?>