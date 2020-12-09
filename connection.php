<?php
$connection = mysqli_connect('localhost','root','','kids accessories shop');
	if(mysqli_connect_errno()){
		die('Database connection failed'. mysqli_connect_errno());
	}else{
		//echo "Connection Successful.";
	}
?>