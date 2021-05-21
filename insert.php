<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Phonebook practice 4</title>
	<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
	
	<div id="wrapper">
		<div id="search">
			<img src="images/slika1.jpg" alt="Insert Contact" title="Insert Contact">
			<a href="index.php"><img src="images/slika6.jpg" alt="Phonebook"></a>
			<a href="remove.php"><img src="images/slika2.jpg" alt="Remove contact"></a>
			<a href="update.php"><img src="images/update.jpg" alt="Update contact"></a>
			
			<form method="POST" action="">
				<label for="firstname">Firstname: </label><br>
				<input type="text" name="firstname" id="firstname"><br>
				<label for="lastname">Lastname: </label><br>
				<input type="text" name="lastname" id="lastname"><br>
				<label for="tel">Tel: </label><br>
				<input type="text" name="tel" id="tel"><br>
			
				<input type="submit" name="insert" value="Insert">	
			</form>
		</div>
		<div id="message">
			<?php
				if(isset($_POST['insert'])) {
					if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['tel'])) {
						if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['tel'])) {
							$firstname=trim($_POST['firstname']);
							$lastname=trim($_POST['lastname']);
							$tel=trim($_POST['tel']);
							require('inc/connect.php');
							$firstname=mysqli_real_escape_string($conn,$firstname);
							$lastname=mysqli_real_escape_string($conn,$lastname);
							$tel=mysqli_real_escape_string($conn,$tel);
							
							$query="call insert_contact('{$firstname}','{$lastname}','{$tel}')";
							if(mysqli_query($conn,$query)===true) {
								echo "New record successfully created";
							}
						} else {
							echo "You must fill all fields";
						}
					} else {
						echo "All values must exists";
					}
				}
			
			?>
		</div>
	</div>
	
</body>
</html>