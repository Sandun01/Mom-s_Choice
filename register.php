<?php
include_once 'config.php';
?>

<?php

	$fname = $_POST["firstname"];
	$lname = $_POST["lastname"];
	$uname = $_POST["username"];
	$pwd = $_POST["password"];
	$email = $_POST["email"];
	$hashed_password = sha1($pwd);
	
	$sql = "INSERT INTO `customer`(`No`, `fname`, `lname`, `username`, `email`, `phonenumber`, `password`, `address`) VALUES ('','$fname','$lname','$uname','$email','NULL','$hashed_password','NULL')";
	
if(isset($_POST["sub"])){
	if($_POST["cnfrmpw"] == $pwd){
		
			if(mysqli_query($conn,$sql))
			{
				echo "<script>alert('You have successfully registered to the system!!')</script>";
				//header('Location: index.php');
				
			}
	}
	else
			{
				echo "<script> alert('Error:Your data is not insereted successfully ,Try Again ')</script>";
			}

}

?>