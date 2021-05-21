<?php
			if(isset($_GET['search'])) {
				if(isset($_GET['criteria'])) {
					if(!empty($_GET['criteria'])) {
						$criteria=trim($_GET['criteria']);
						require('inc/connect.php');
						$criteria=mysqli_real_escape_string($conn,$criteria);
						$query="call select_contact('{$criteria}')";
						$res=mysqli_query($conn,$query);
						if(mysqli_num_rows($res)>0) {
							while($row=mysqli_fetch_assoc($res)) {
		?>						
			<div id="result">
				<img src="images/slika3.jpg" alt="Contact picture">
				<p><b>Name: </b><?php echo $row['fname'] . " " . $row['lname'];?></p>
				<p><b>Tel: </b><?php echo $row['tel'];?></p>
			</div>
		<?php						
							}
						} else {
							echo "No results in database";
						}
					} else {
						echo "You must fill criteria";
					}
				} else {
					echo "Criteria must exist";
				}
			}
		
		
		?>