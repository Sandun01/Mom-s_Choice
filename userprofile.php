<?php
include_once 'config.php';
include_once 'un.php';
//session_start();
//echo $_SESSION[un];
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Mom's Choice User Profile</title>
<link rel="stylesheet" type="text/css" href="styles/user.css">
<link rel="stylesheet" type="text/css" href="styles/home.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
<script src="js/userprofile.js"></script>
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
<li class="list1"><a class="nav" href="accessories.html">ACCESSORIES</a>
<li class="list1"><a class="nav" href="AboutUs.html">ABOUT US</a></li>
<li class="list1"><a class="nav" href="contactus.html">CONTACT US</a></li>
<li class="list1"><a class="nav" href="adminlogin.php">ADMINISTRATION</a></li>
</ul>


<!Sub Menue(Cart,Profile and Search-bar)>

<div class="cart">

<a class="cart1" href="cart.html"><i class="fas fa-shopping-cart fa-2x"></i></a>

</div>

<div class="profile">

<div class= "dropboxprof">

<div class="profile1"><i class="fas fa-user-circle fa-2x"></i></div>

<div class = "droplistprof">

<a href="login.html">Sign In</a>
<a href="registration.html">Sign Up</a>

</div>

</div>

</div>


<div class = "search-bar">

<form action ="action.php" method = "Get">
<input type="text" placeholder="Search for product..." name="search">
<button type="submit"><i class="fa fa-search"></i></button>
</form>

</div>

</div>

<!--end of Sub Menue(Cart,Profile and Search-bar)-->

<!--end of menue bar-->
</br>

<!begin of user profile>


<div class="uname">
<button class="userpic">
<i class = "fas fa-user-circle fa-9x"></i>
</button>

</div>
<?php
	$up = array();
	$sql_p = "SELECT `username`, `fname`, `lname`, `phonenumber`, `email`, `address` FROM `customer` WHERE `username` = '$username'";
	$rec = mysqli_query($conn,$sql_p);
	 while($r = mysqli_fetch_assoc($rec)){
	 $up['username'] = $r['username'];
	 $up['fname'] = $r['fname'];
	 $up['lname'] = $r['lname'];
	 $up['phonenumber'] = $r['phonenumber'];
	 $up['email'] = $r['email'];
	 $up['address'] = $r['address'];
	 }
	 
?>
<font size="20px"><?php echo  $up["username"] ?></font><br/>
<br/>
<h6>Can view and edit some parts of page only.</h6>



<br/> 

<div class="row">

    <div class="col1">
	
		

	<center><h1>My User Profile</h1></center>

	<font face="arial" size="3px">
	<br/>
	<label><i class="fas fa-user fa-2x"></i><b> Contact Name</b>:<?php echo $up['fname']."  ".$up['lname']?><br/></label>
	<label><i class="fas fa-user fa-2x"></i><b> First Name</b>:<?php echo   $up['fname'] ?><br/></label>
	<label><i class="fas fa-user fa-2x"></i><b> Last Name</b>:<?php echo   $up['lname'] ?><br/></label>
	<label><i class="fas fa-at fa-2x"></i><b> Contact Email</b>:<?php echo   $up['email']  ?></label>

	<label><i class="fas fa-phone-alt fa-2x"></i><b> Contact Number</b>:<?php echo   $up['phonenumber'] ?><br/></label>

	<label><i class="fas fa-address-card fa-2x"></i><b> Shipping Address</b>:<?php echo  $up['address'] ?></label>

	
<!--
	<label><i class="fas fa-address-book fa-2x"></i><b>About Me</b>:</br>-------------------------------------------------------------------------------------------------------</br>
	-------------------------------------------------------------------------------------------------------</br>-------------------------------------------------------------------------------------------------------</br>
	-------------------------------------------------------------------------------------------------------</br>-------------------------------------------------------------------------------------------------------</br>
	-------------------------------------------------------------------------------------------------------
			</label>-->
			</font>
		
		
    </div>


    <div class="col1"> 

		


	<!--<h1>Personal Information</h1>

	<font face="arial" size="3px">
 
	<label><i class="fas fa-user fa-2x"></i><b> First Name</b>:First Name</label>
	
	<label><i class="fas fa-user fa-2x"></i><b> Last Name</b>:Last Name</label>

	<label><i class="fas fa-address-card fa-2x"></i><b> Date of Birth</b>:dd/mm/yyyy</label>
	
	<label><i class="fas fa-address-card fa-2x"></i><b> Address 1</b>:No.123,Street,Country.</label>
	
	<label><i class="fas fa-address-card fa-2x"></i><b> Address 2</b>:No.123,Street,Country.</label>
	
	<label><i class="fas fa-address-card fa-2x"></i><b> Bank Account</b>:Account Number</label>
	
	-->
	<br/><br/><br/>
	<a href="cart.html" class="button1" onclick="cart()">View Cart <i class="fas fa-shopping-cart"></i></a>
		<br/><br/>
	<a href="index.html" class="button1">Log Out <i class="fas fa-power-off"></i></a>
		<br/>
	<a href="updateprofile.html" class="button1">Update User Profile <i class="fas fa-user fa-1x"></i></a>
		<br/>
	<a  class="button1">Delete Account <i class="fas fa-power-off"></i></a>		
		</font>
   <br/><br/><br/>
	</div>

 
</div>


<!end of user profile>

</br>
<hr>

<marquee><b><font color="#691360">Mom's Choise - Cause little things matter... </font></marquee>
<hr>

<!footer begin>

<footer>

<div class="socialmedia">
<a class="socialmedia1" href="https://www.facebook.com"><i class="fab fa-facebook-square fa-2x"></i></a>

<a class="socialmedia1" href="https://www.instagram.com"><i class="fab fa-instagram fa-2x"></i></a>
<a class="socialmedia1" href="https://twitter.com/login"><i class="fab fa-twitter-square fa-2x"></i></a>
<a class="socialmedia1" href="https://www.google.com/intl/si/gmail/about/#"><i class="fab fa-google-plus-square fa-2x"></i></i></a>
<a class="socialmedia1" href="https://www.whatsapp.com"><i class="fab fa-whatsapp-square fa-2x"></i></a>
</div>

<ul class="nav3">
<li class="list2"><a class="nav" href="index.php">HOME</a></li>
<li class="list2"><a class="nav" href="accessories.php">ACCESSORIES</a></li>
<li class="list2"><a class="nav" href="AboutUs.html">ABOUT US</a></li>
<li class="list2"><a class="nav" href="contactus.php">CONTACT US</a></li>
<li class="list1"><a class="nav" href="adminlogin.php">ADMINISTRATION</a></li>
</ul>

</footer>

<!footer End>
	
</body>
</html>