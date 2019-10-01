<?php
	session_start();
?>

<!DOCTYPE html>
	<body>
		<?php
			echo "First name : ".$_SESSION["fname"]."<br/>";
			echo "Last name : ".$_SESSION["lname"]."<br/>";
			echo "Email : ".$_SESSION["email"]."<br/>";
			echo "Phone No : ".$_SESSION["phoneno"]."<br/>";
		?>
	</body>
</html>