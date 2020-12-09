<?php
	session_start();
?>
<?php require_once('connection.php'); ?>
<?php

	//check for form submission
	if (isset($_POST['submit'])) {

		$errors = array();

		//check if the username and password has been entered
		//if (!isset($_POST['userName']) || strlen(trim($_POST['username'])) < 1){
			//$errors[] = "username is missing or invalid";

}

		//if (!isset($_POST['password']) || strlen(trim($_POST['password'])) < 1){
			//$errors[] = "password is missing or invalid";


		//check if there are any errors in the form
		//if(empty($errors)){
			//$username = $_SESSION['username'] ;
		//save username and password into variables
			$username = mysqli_real_escape_string($connection,$_POST['userName']);

			$password = mysqli_real_escape_string($connection,$_POST['password']);
		//	$hashed_password = sha1($password);

		//prepare database query
		$query = "SELECT *FROM admin
				  WHERE username = '{$username}'
				  AND password = '{$password}'
				  LIMIT 1";
		$result_set = mysqli_query($connection,$query);

		if ($result_set){
			//query succesfull
			if(mysqli_num_rows($result_set) == 1){
				//valid user found
				$user = mysqli_fetch_assoc($result_set);
				$_SESSION['user_ID'] = $user['customer_ID'];
				echo $user;
				//redirect to users.php
				header('Location: AdminDashboard.php');
			}else{
				//user name and password invalid
				$errors[] = 'Invalid username or password';
			}
		}else{
			$errors[] = 'database query failed';
		}
			}
	}
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="styles/home.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
<title>Admin Login From</title>
<link rel="stylesheet" type="text/css" href="styles/login2.css">

<script src="js/adminlogin.js"></script>
</head>

<body background="pictures/background.jpg">

<img src="pictures/56.png" width="350" height="150">

<hr>
<div class="image">

<center>
<h1>Admin Login Form</h1>
</center>

<br>
<br>
<br>
<br>

<!--user login begins-->


<center>
<div class="login">
<img src="pictures/login.png" class="avatar1">
<h1>
Login Here
</h1>
<form>
<p>User Name</p>
<input type = "text" id="user" placeholder="Enter Username">
<P>Password</p>
<input type = "password" id="pwd" placeholder="Enter Password">
<a href="#">Forget Your Password?</a><br>
<input type="submit" name="" value="Login" onclick="validateForm()">
</form>
</div>
</center>

<!--user login ends-->
</div>
<hr>

</body>
</html>