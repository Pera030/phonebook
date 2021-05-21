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
			<img src="images/slika2.jpg" alt="Remove contact" title="Remove contact">
			<a href="index.php"><img src="images/slika6.jpg" alt="Phonebook"></a>
			<a href="insert.php"><img src="images/slika1.jpg" alt="Insert contact"></a>
			<a href="update.php"><img src="images/update.jpg" alt="Update contact"></a>
			
			<?php
				require('inc/connect.php');
				$query="call select_all()";
				$res=mysqli_query($conn,$query);
				if(mysqli_num_rows($res)>0) {
					while($row=mysqli_fetch_assoc($res)) {			
			?>
			<div id="result">
				<a href="inc/delete_contact.php?id=<?php echo $row['id'];?>"><img src="images/slika2.jpg"></a>
				<p><b>Name: </b><?php echo $row['fname'] . " " . $row['lname'];?></p>
				<p><b>Tel: </b><?php echo $row['tel'];?></p>
			</div>
			<?php
					}
				} else {
					echo "No records in database";
				}				
			?>
			
		</div>
	</div>
	
</body>
</html>