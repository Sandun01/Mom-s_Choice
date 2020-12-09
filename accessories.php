<!DOCTYPE HTML>
<html>
<head>
<title>Mom's Choice Accessories</title>
<link rel="stylesheet" type="text/css" href="styles/home.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">

</head>

<body>
<img src="pictures/56.png" width="350" height="150">

<hr>

<!--Start of menue bar-->
<!--Main Menue bar-->

<div class="nav1">
<ul class="nav2">
<li class="list1"><a class="nav" href="index.php">HOME</a></li>

<li class="list1"><a class="nav" href="#">ACCESSORIES</a></li>
<li class="list1"><a class="nav" href="AboutUs.html">ABOUT US</a></li>
<li class="list1"><a class="nav" href="contactus.html">CONTACT US</a></li>
</ul>


<!--Sub Menue(Cart,Profile and Search-bar)-->

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

<form action ="action.php">
<input type="text" placeholder="Search.." name="search">
<button type="submit"><i class="fa fa-search"></i></button>
</form>

</div>

</div>

<!--end of Sub Menue(Cart,Profile and Search-bar)-->

<!--end of menue bar-->

</br>


<h1>Baby & Kids Accessories</h1>

<hr>

<!---shopping card end--->
<?php
include_once 'config.php';

 $sql = "SELECT * FROM item";
 $result = $conn->query($sql);
 
 if($result-> num_rows > 0)
 {
 while($row = $result -> fetch_assoc())
  {
    $id = $row['Item_id'];
    $name = $row['Item_name'];
    $price = $row['Item_price'];
    $quantity = $row['Quantity'];
	$des = $row['description'];
	$picName = $row['Item_Picture_Name'];


 
  	echo"<div class='Column1'>";
   	echo" <div class='card1'>";
   		echo"<img src='uploads/".$row['Item_Picture_Name']."' width='270' height='250'>";
		echo" </br> ";
	
		echo" <b>";
	 	echo"<font size='5px' face='cursive'>".$name."</font></b>";
		 echo"</br>";
		echo" <font size='3px' face='cursive'>".$des."</font>";
		 echo"</br>";

		 echo"<font size='4px' color='red'>Rs.".$price."</font>";
	
		echo"</br>";
		echo"</br>";
		echo"<a class='cardbutton' href='viewItem.php?ItmId=$id'>View Item</a>";
		echo"<a class='cardbutton1' href='AddToCart.php?ItmId=$id'>Add To Cart</a>";

	echo"</div>";
 	echo"</div>";


  }

 }

?>

<hr>
<marquee><b><font color="#691360">Mom's Choise - Cause little things matter... </font></marquee>
<hr>

<!--footer begin-->

<footer>

<div class="socialmedia">
<a class="socialmedia1" href="https://www.facebook.com"><i class="fab fa-facebook-square fa-2x"></i></a>

<a class="socialmedia1" href="https://www.instagram.com"><i class="fab fa-instagram fa-2x"></i></a>
<a class="socialmedia1" href="https://twitter.com/login"><i class="fab fa-twitter-square fa-2x"></i></a>
<a class="socialmedia1" href="https://www.google.com/intl/si/gmail/about/#"><i class="fab fa-google-plus-square fa-2x"></i></i></a>
<a class="socialmedia1" href="https://www.whatsapp.com"><i class="fab fa-whatsapp-square fa-2x"></i></a>
</div>

<ul class="nav3">
<li class="list1"><a class="nav" href="index.html">HOME</a></li>
<li class="list1"><div class="activeHome"><a class="nav" href="#">ACESSORIES</a></div></li>
<li class="list1"><a class="nav" href="AboutUs.html">ABOUT US</a></li>
<li class="list1"><a class="nav" href="contactus.html">CONTACT US</a></li>
</ul>

</footer>

<!--footer End-->
	
</body>
</html>