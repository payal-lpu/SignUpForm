<?php
	session_start();
?>

<!DOCTYPE html>
	<body>
		<?php
			$fname=$_POST["first"];
			$lname=$_POST["last"];
			$email=$_POST["email"];
			$password=$_POST["password"];
			$confirm=$_POST["confirm"];
			$phoneno=$_POST["phoneNo"];
			$patemail= '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
			$patmobile="/[0-9]{10}/";
			$_SESSION["fname"]=$fname;
			$_SESSION["lname"]=$lname;
			$_SESSION["email"]=$email;
			$_SESSION["phoneno"]=$phoneno;
			
			if(preg_match($patemail,$email) && preg_match($patmobile,$phoneno) && $password==$confirm)
			{
				echo "Welcome $fname $lname"."<br/>"; 
        			echo "<a href='userdashboard.php'>Details</a>";	 
			}	

			else
			{
	 			header("Location: http://localhost/displayerror.php");

			}
		?>
	</body>
</html>