<?php
	session_start();
?>
<?php require_once('connection.php'); ?>
<?php

	//check for form submission
	if (isset($_POST['submit'])) {

		$errors = array();

		//check if the username and password has been entered
		if (!isset($_POST['username']) || strlen(trim($_POST['username'])) < 1){
			$errors[] = "username is missing or invalid";

}

		if (!isset($_POST['password']) || strlen(trim($_POST['password'])) < 1){
			$errors[] = "password is missing or invalid";

}
		//check if there are any errors in the form
		if(empty($errors)){
			//$username = $_SESSION['username'] ;
		//save username and password into variables
			$username = mysqli_real_escape_string($connection,$_POST['username']);

			$password = mysqli_real_escape_string($connection,$_POST['password']);
			$hashed_password = sha1($password);

		//prepare database query
		$query = "SELECT *FROM user
				  WHERE username = '{$username}'
				  AND password = '{$hashed_password}'
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
				header('Location: userprofile.php');
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

<title>Login From</title>

<link rel="stylesheet" type="text/css" href="styles/styles.css">
<link rel="stylesheet" type="text/css" href="styles/home.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">

<link rel="stylesheet" type="text/css" href="styles/login1.css">
<style>
#theme1
	{
	background: url(pictures/theme1.png);
	}

#footer1
	{
	background: url(pictures/theme2.jpg);
	}

</style>
</head>
<body>

<div id = "theme1">
<img src="pictures/56.png" width="350" height="150">
</div>
<hr>

<!Start of menue bar>
<!Main Menue bar>

<div class="nav1">
<ul class="nav2">
<li class="list1"><a class="nav" href="index.php">HOME</a></li>

<div class= "dropbox">
<li class="list1"><a class="nav" href="accessories.php">ACCESSORIES</a>

</li>

</div>

<li class="list1"><a class="nav" href="AboutUs.html">ABOUT US</a></li>
<li class="list1"><a class="nav" href="contactus.html">CONTACT US</a></li>
<li class="list1"><a class="nav" href="adminlogin.php">ADMINISTRATION</a></li>
</ul>


<!Sub Menue(Cart,Profile and Search-bar)>

<div class="cart">

<a class="cart1" href="cart.php"><i class="fas fa-shopping-cart fa-2x"></i></a>

</div>

<! drop down list2>
<div class="profile">

<div class= "dropboxprof">

<div class="profile1"><i class="fas fa-user-circle fa-2x"></i></div>

<div class = "droplistprof">

<a href="#">Sign In</a>
<a href="registration.html">Sign Up</a>

</div>

</div>
</div>

<! end drop down list>

<div class = "search-bar">

<form action ="action.php" method = "GET">
<input type="text" placeholder="Search.." name="search">
<button type="submit"><i class="fa fa-search"></i></button>
</form>

</div>

</div>

<!end of Sub Menue(Cart,Profile and Search-bar)>

<!end of menue bar>

</br>
</br>
</br>
</br>

<!user login begins>


<center>
<div class="login">
<img src="pictures/login.png" class="avatar">
<h1>
Login Here
</h1>
<form action="login.php" method="post" >
	<?php
	if (isset($errors) && !empty($errors)){
		echo '<div class ="error"><p>Invalid Username / Password</p></div>';
	}
	?>
<p>User Name</p>
<input type = "text" name="username" placeholder="Enter Username">
<P>Password</p>
<input type = "password" name="password" placeholder="Enter Password">
<a href="#">Forget Your Password?</a><br>
<input type="submit" name="submit" value="Login">
</form>
</div>
</center>

<!user login ends>

<hr>
<marquee><b><font color="#691360">Moms Choise - Cause little things matter... </font></marquee>
<hr>

<!footer begin>

<<footer id='footer1'>

<div class="socialmedia">
<a class="socialmedia1" href="https://www.facebook.com"><i class="fab fa-facebook-square fa-2x"></i></a>

<a class="socialmedia1" href="https://www.instagram.com"><i class="fab fa-instagram fa-2x"></i></a>
<a class="socialmedia1" href="https://twitter.com/login"><i class="fab fa-twitter-square fa-2x"></i></a>
<a class="socialmedia1" href="https://www.google.com/intl/si/gmail/about/#"><i class="fab fa-google-plus-square fa-2x"></i></i></a>
<a class="socialmedia1" href="https://www.whatsapp.com"><i class="fab fa-whatsapp-square fa-2x"></i></a>
</div>

<ul class="nav3">
<li class="list1"><a class="nav" href="index.php">HOME</a></li>
<li class="list1"><a class="nav" href="accessories.php">ACCESSORIES</a></li>
<li class="list1"><a class="nav" href="https://courseweb.sliit.lk/course">ABOUT US</a></li>
<li class="list1"><a class="nav" href="contactus.html">CONTACT US</a></li>
</ul>

</footer>

<!footer End>

</body>
</html>