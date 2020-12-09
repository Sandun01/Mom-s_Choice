<?php
include_once 'config.php';
include_once 'un.php';
$fname = $_POST["firstname"];
$lname = $_POST["lastname"];
$email = $_POST["email"];
$pnum = $_POST["pnum"];
$address = $_POST["address"];

$que_Update= "UPDATE `customer` SET `fname`= '$fname',`lname`='$lname',`phonenumber`='$pnum',`email`='$email',`address`='$address' WHERE `username` = '$username '";

if(mysqli_query($conn,$que_Update))
			{
				echo "<script>alert('You have successfully updated system!!')</script>";
				header('Location: userprofile.php');
			}
	
	else
			{
				echo "<script> alert('Error:Your data is not updated successfully ,Try Again ')</script>";
			}


?>