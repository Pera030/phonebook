<?php
	
	if(isset($_POST['update'])) {
		if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['tel'])) {
			if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['tel'])) {
				require('connect.php');
				$firstname=trim($_POST['firstname']);
				$lastname=trim($_POST['lastname']);
				$tel=trim($_POST['tel']);
				$contact_id=trim($_POST['hidden_id']);
				$firstname=mysqli_real_escape_string($conn,$firstname);
				$lastname=mysqli_real_escape_string($conn,$lastname);
				$tel=mysqli_real_escape_string($conn,$tel);
				
				$query="call update_contact('{$firstname}','{$lastname}','{$tel}','{$contact_id}')";
				if(mysqli_query($conn,$query)===true) {
					header("location:../update.php");
				} else {
					echo "Error";
				}
			}
		}
	}



?>