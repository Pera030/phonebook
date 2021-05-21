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
			<img src="images/slika6.jpg" alt="Phonebook" title="phonebook">
			<a href="insert.php"><img src="images/slika1.jpg" alt="Insert contact"></a>
			<a href="remove.php"><img src="images/slika2.jpg" alt="Remove contact"></a>
			<a href="update.php"><img src="images/update.jpg" alt="Update contact"></a>
			
			<form method="GET" action="">
				<input type="text" name="criteria" placeholder="Criteria...">
				<input type="submit" name="search" value="Search">
			</form>
		</div>
		<div id="result">
			<?php
				require('inc/getResult.php');
			?>
		</div>	
	</div>
	
</body>
</html>