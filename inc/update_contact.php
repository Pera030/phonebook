<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Phonebook practice 4</title>
	<link href="../css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
	
	<div id="wrapper">
		<div id="search">
			<img src="../images/update.jpg" alt="Update" title="Update">
			<a href="../index.php"><img src="../images/slika6.jpg" alt="Phonebook"></a>
			<a href="../remove.php"><img src="../images/slika2.jpg" alt="Remove contact"></a>
			<a href="../insert.php"><img src="../images/slika1.jpg" alt="Insert contact"></a>
			
			<?php
				
				if(isset($_GET['id'])) {
					require('connect.php');
					$contact_id=$_GET['id'];
					$query="call select_id('{$contact_id}')";
					$res=mysqli_query($conn,$query);
					if(mysqli_num_rows($res)>0) {
						while($row=mysqli_fetch_assoc($res)) {
			?>				
			<form method="POST" action="update_user.php">
				<label for="firstname">Firstname: </label><br>
				<input type="text" name="firstname" id="firstname" value="<?php echo $row['fname'];?>"><br>
				<label for="lastname">Lastname: </label><br>
				<input type="text" name="lastname" id="lastname" value="<?php echo $row['lname'];?>"><br>
				<label for="tel">Tel: </label><br>
				<input type="text" name="tel" id="tel" value="<?php echo $row['tel'];?>"><br>
				<input type="hidden" name="hidden_id" value="<?php echo $row['id'];?>">
				<input type="submit" name="update" value="Update">	
			</form>
			<?php
						}
					} else {
						echo "No results in database";
					}
				} else {
					echo "No contact ID";
				}
			?>
			
		</div>
	</div>
	
</body>
</html>