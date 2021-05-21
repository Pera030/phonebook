<?php
	
	if(isset($_GET['id'])) {
		$id=$_GET['id'];
		require('connect.php');
		$query="call delete_contact('{$id}')";
		mysqli_query($conn,$query);
		header("Location:../remove.php");
	}
	
	
	
?>