<?php

	$serverName="localhost";
	$username="root";
	$password="";
	$dbName="phonebook";
	
	$conn=mysqli_connect($serverName,$username,$password,$dbName);
	
	if(!$conn) {
		die("Connection error: " . mysqli_connect_error());
	} 

?>