<!DOCTYPE HTML>
<html>
<head>
<title>Mom's Choice</title>

<link rel="icon" href="pictures/title1.png">

<link rel="stylesheet" type="text/css" href="styles/home.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">

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

<!--Start of menue bar-->
<!--Main Menue bar-->

<div class="nav1">
<ul class="nav2">
<li class="list1"><div class="activeHome"><a class="nav" href="#">HOME</a></div></li>

<li class="list1"><a class="nav" href="accessories.php">ACCESSORIES</a>
</li>

<li class="list1"><a class="nav" href="AboutUs.html">ABOUT US</a></li>
<li class="list1"><a class="nav" href="contactus.html">CONTACT US</a></li>
<li class="list1"><a class="nav" href="AdminDashboard.html">ADMINISTRATION</a></li>

</ul>


<!---Sub Menue(Cart,Profile and Search-bar)--->

<div class="cart">

<a class="cart1" href="bill.php"><i class="fas fa-shopping-cart fa-2x"></i></a>

</div>

<div class="profile">

<div class= "dropboxprof">

<div class="profile1"><i class="fas fa-user-circle fa-2x"></i></div>

<div class = "droplistprof">

<a href="login.php">Sign In</a>
<a href="registration.html">Sign Up</a>

</div>

</div>

</div>


<div class = "search-bar">

<form action ="action.php" method="GET">
<input type="text" placeholder="Search for product..." name="search">
<button type="submit"><i class="fa fa-search"></i></button>
</form>

</div>

</div>

<!--end of Sub Menue(Cart,Profile and Search-bar)-->

<!--end of menue bar-->

</br>


<!--silde show begins-->

<div class="slideshow">

<!--silde show image 1-->

<div class="webSlides">
 <div class="slideshownumText">1/4</div>
 <img src ="pictures/baby5.jpg" style="width:100%" width="1000px" height="400"> 
<div class="slideundertxt">Picture 1</div>
</div>

<!--silde show image 2-->

<div class="webSlides">
 <div class="slideshownumText">2/4</div>
 <img src ="pictures/baby7.jpg" style="width:100%" width="1000px" height="400"> 
<div class="slideundertxt">Picture 2</div>
</div>

<!--silde show image 3-->

<div class="webSlides">
 <div class="slideshownumText">3/4</div>
 <img src ="pictures/baby4.jpg" style="width:100%" width="1000px" height="400"> 
<div class="slideundertxt">Picture 3</div>
</div>

<!--silde show image 4-->

<div class="webSlides">
 <div class="slideshownumText">4/4</div>
 <img src ="pictures/baby10.jpg" style="width:100%" width="1000px" height="400"> 
<div class="slideundertxt">Picture 4</div>
</div>



</div>

<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
<span class="dot" onclick="currentSlide(4)"></span>
</div>

<script src="js/myScripthome.js">
</script>

</br>

<!--silde show ends-->

<h1><center>Baby & Kids Accessories</center></h1>

<hr>
<!--------Connect to the database----------------->

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
		echo"<a class='cardbutton1' href='cart.html?ItmId=$id'>Add To Cart</a>";

	echo"</div>";
 	echo"</div>";


  }

 }

?>

</br>

<!---shopping card end---->

<hr>
<marquee><b><font color="#691360">Mom's Choice - 'Cause little things matter... </font></marquee>
<hr>

<!--footer begin--->

<footer id='footer1'>

<div class="socialmedia">
<a class="socialmedia1" href="https://www.facebook.com"><i class="fab fa-facebook-square fa-2x"></i></a>

<a class="socialmedia1" href="https://www.instagram.com"><i class="fab fa-instagram fa-2x"></i></a>
<a class="socialmedia1" href="https://twitter.com/login"><i class="fab fa-twitter-square fa-2x"></i></a>
<a class="socialmedia1" href="https://www.google.com/intl/si/gmail/about/#"><i class="fab fa-google-plus-square fa-2x"></i></i></a>
<a class="socialmedia1" href="https://www.whatsapp.com"><i class="fab fa-whatsapp-square fa-2x"></i></a>
</div>

<ul class="nav3">
<li class="list2"><div class="activeHome"><a class="nav" href="#">HOME</a></div></li>
<li class="list2"><a class="nav" href="accessories.php">ACCESSORIES</a></li>
<li class="list2"><a class="nav" href="AboutUs.html">ABOUT US</a></li>
<li class="list2"><a class="nav" href="contactus.html">CONTACT US</a></li>
</ul>

</footer>

<!--footer End--->
	
</body>
</html>