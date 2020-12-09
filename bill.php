
<?php require_once('connection.php'); ?>
<?php

	$name= array();
	$name1= array();

	$query = "SELECT firstName,lastName,username,address FROM user WHERE customer_ID = 1";
	$query1 = "SELECT Amount FROM cart  WHERE cart_ID = 1";

	$result_set = mysqli_query($connection,$query);
	$result_set1 = mysqli_query($connection,$query1);

	while($pay = mysqli_fetch_assoc($result_set)){
		 $name['firstName']=$pay['firstName'];
		 $name['lastName'] = $pay['lastName'];
		 $name['username'] = $pay['username'];
		 $name['address'] = $pay['address'];
	}
	while($pay1 = mysqli_fetch_assoc($result_set1)){
		$name1['Amount'] = $pay1['Amount'];
	}


?>


<!DOCTYPE HTML>
<html>
<head>
<title>Mom's Choice Payment</title>

<link rel="stylesheet" type="text/css" href="styles/payment.css">
<link rel="stylesheet" type="text/css" href="styles/home.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">

<script src="js/payment.js"></script>

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
<li class="list1"><a class="nav" href="index.html">HOME</a></li>

<li class="list1"><a class="nav" href="accessories.php">ACCESSORIES</a>
</li>



<li class="list1"><a class="nav" href="AboutUs.html">ABOUT US</a></li>
<li class="list1"><a class="nav" href="contactus.php">CONTACT US</a></li>
<li class="list1"><a class="nav" href="adminlogin.php">ABOUT US</a></li>
</ul>


<!Sub Menue(Cart,Profile and Search-bar)>

<div class="cart">

<a class="cart1" href=""><i class="fas fa-shopping-cart fa-2x"></i></a>

</div>

<! drop down list2>
<div class="profile">

<div class= "dropboxprof">

<div class="profile1"><i class="fas fa-user-circle fa-2x"></i></div>

<div class = "droplistprof">

<a href="login.php">Sign In</a>
<a href="registration .html">Sign Up</a>

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


<!Begin payment>

<h1><font size="10px" style="arial">Payment Details</font></h1>

<div class="pay">

<div class = "col1"> 
    <div class="payDetails">
 
 <form action ="insertCardDetails.php" method = "post" onsubmit="validate()">
 
 
 <div class = "row">
 <div class = "col1"> 

   <font size="6px">Billing Details</font>
   </br>
   <label><i class="fas fa-user"></i>Full Name:  <?php echo $name['firstName']." ".$name['lastName']?><br/></label><br>
   <label><i class="fas fa-envelope"></i>Email:<?php echo $name['username'] ?><br/> </label>
   </br>
   <label><i class="fas fa-address-card"></i>Address: <?php echo $name['address'] ?><br/></label>
  </div>  
  
  <div class = "col2">  
    <font size="6px">Payment</font>
	</br>
  <label>Accepted Methods</label>
  <div class="paycards">
	<i class="fab fa-cc-visa fa-2x" style="color:#0F0B6F;"></i>
	<i class="fab fa-cc-amex fa-2x" style="color:#3DBDE8;"></i>
	<i class="fab fa-cc-mastercard fa-2x" style="color:#D12727;"></i>
	<i class="fab fa-cc-discover fa-2x" style="color:#F77903;"></i>
  </div>
  
  <label>Card Holder's Name</label>
  <input type="text" id="cardname" name="field2" placeholder="Card Holder's Name" required>
  <label>Credit Card Number</label>
  <input type="text" id="cardnumber" name="field3" placeholder="1111" required>
  <label>CVV</label>
  <input type="text" id="cvv" name="field4" placeholder="cvv" required>
  <label>Amount:<?php echo $name1['Amount'] ?><br/></label>
   </div>
  </div> 
 </div>
   
</div>   
 <center>

 <input class="confirmPay" type="submit" value="Confirm Payment" action = "index.php">

 </center>
   </form>
   
   </div>
 </div> 

</div> 
   
 <!end payment>
   
<hr>
<marquee><b><font color="#691360">Mom's Choise - Cause little things matter... </font></marquee>
<hr>

<!footer begin>

<footer id='footer1'>
<div class="socialmedia">
<a class="socialmedia1" href="https://www.facebook.com"><i class="fab fa-facebook-square fa-2x"></i></a>

<a class="socialmedia1" href="https://www.instagram.com"><i class="fab fa-instagram fa-2x"></i></a>
<a class="socialmedia1" href="https://twitter.com/login"><i class="fab fa-twitter-square fa-2x"></i></a>
<a class="socialmedia1" href="https://www.google.com/intl/si/gmail/about/#"><i class="fab fa-google-plus-square fa-2x"></i></i></a>
<a class="socialmedia1" href="https://www.whatsapp.com"><i class="fab fa-whatsapp-square fa-2x"></i></a>
</div>

<ul class="nav3">
<li class="list1"><a class="nav" href="#">HOME</a></li>
<li class="list1"><a class="nav" href="accessories.php">ACESSORIES</a></li>
<li class="list1"><a class="nav" href="AboutUs.html">ABOUT US</a></li>
<li class="list1"><a class="nav" href="contactus.html">CONTACT US</a></li>
</ul>

</footer>

<!footer End>
	
</body>
</html>
<?php mysqli_close($connection); ?>