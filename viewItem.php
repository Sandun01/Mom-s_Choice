<!DOCTYPE HTML>
<html>
<head>
<title>Mom's Choice</title>

<link rel="icon" href="pictures/title1.png">

<!----<link rel="stylesheet" type="text/css" href="styles/home.css">----->

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

	/* nav bar*/
.nav2
{
list-style-type:none;
margin:0;
padding:0;
}

.nav1
{
list-style-type:none;
margin:0;
padding:0;
overflow: hidden;
background-color: #99448C;
}

/* nav bar Main Menue*/
li.list1
{
float:left;
}

li a.nav
{
display:block;
color:white;
text-align:center;
font-size:25px;
padding:13px 16px;
text-decoration: none;

}

.nav:hover
{
background-color:#F963E7;
}

.activeHome
{
background-color: #380F38;
}


/* header1*/
h1
{
font-family: cursive;
font-size: 40px;
}
/* end header1*/

/*cart dropdown list*/
.droplistprof
{
display: none;
position: absolute;
background-color:#f1f1f1;
min-width: 50px;
z-index: 1;
font-size:25px;

}

.droplistprof a
{
color: black;
padding: 12px 16px;
text-decoration: none;
display: block;
}
.droplistprof a:hover
{
background-color: #F963E7;
}

.dropboxprof:hover .droplistprof
{
display: block;
}

/*end cart dropdown list*/

/* nav bar profile*/
.profile
{
float:right;
padding: 6px 10px;
margin-top: 1px;
margin-right: 5px;
}

.profile .profile1:hover
{
background:#F766E8;
}

.profile1
{
display:block;
color:white;
font-size:20px;
text-decoration: none;

}

/* nav bar Cart*/
.cart
{
float:right;
padding: 6px 10px;
margin-top: 1px;
margin-right: 0px;
}

.cart .cart1:hover
{
background:#F766E8;
}

.cart1
{
display:block;
color:white;
font-size:20px;
text-decoration: none;

}

/* nav bar Search bar*/

.nav1 .search-bar
{
float : right;
}

.nav1 input[type=text]
{
border-radius: 5px;
padding: 8px 200px 10px 10px;
margin-top: 10px;
margin-right: 0px;
font-size: 15px;
border: none;
}

/* nav bar Search bar icon*/

.nav1 .search-bar button
{
border-radius: 5px;
float: right;
color:white;
padding: 8px 15px;
margin-top: 10px;
margin-right: 10px;
background: #EE6EEA;
font-size: 15px;
border: none;
cursor: pointer;
}

.nav1 .search-bar button:hover
{
background: #e5ff52;
}
/*end of menue*/


/*Shopping Cards begins*/

*{
box-sizing: border-box;
}

.Column1
{
 float: left;
 width: 75%;
 padding:0 10px;
}

.row1,.row2
{
margin:10px 80px;
}

.row1:after,.row2:after
{
content: "";
display: table;
clear: both;
}

.card1
{
box-shadow:0 4px 8px 0 rgba(0,0,0,0.2);
padding: 16px;
text-align: center;
background-color: #f1f1f1;
}

.card1:hover
{
background-color:rgb(145, 186, 233);
}

/*--------------------------*/

a.cardbutton
{
background-color:rgb(43, 12, 78);
border-radius: 25px;
margin:0;
padding:0;
overflow: hidden;
color:white;
text-align:center;
font-size:20px;
padding: 10px 10px;
text-decoration: none;
}

a.cardbutton1
{
background-color:rgb(43, 12, 78);
border-radius: 25px;
margin:0;
padding:0;
overflow: hidden;
color:white;
text-align:center;
font-size:20px;
padding: 10px 10px;
text-decoration: none;
}

a.cardbutton:hover
{
background-color:rgb(255, 47, 20);
}

a.cardbutton1:hover
{
background-color:rgb(31, 155, 0);
}


/* end of shopping card*/

/*footer begin*/

/*social media icons*/

.socialmedia1
{
float:left;
padding: 6px 10px;
margin-top: 1px;
margin-left: 5px;

display:block;
color:white;
font-size:20px;
text-decoration: none;

}

.socialmedia .socialmedia1:hover
{
background:#C5C3C5;
}

/*social media icons*/

footer
{
color:white;
width: 100%;
background-color: #99448C;
padding: 60px 0px;
}

/*menue*/
.nav3
{
float: right;
list-style-type:none;
margin:0;
padding:0;
}

li.list2
{
float:left;
}

/* End Home page*/



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
<li class="list1"><a class="nav" href="index.php">HOME</a></li>

<li class="list1"><a class="nav" href="accessories.php">ACCESSORIES</a>

</li>

<li class="list1"><a class="nav" href="AboutUs.html">ABOUT US</a></li>
<li class="list1"><a class="nav" href="contactus.html">CONTACT US</a></li>
<li class="list1"><a class="nav" href="AdminDashboard.html">ADMINISTRATION</a></li>

</ul>


<!---Sub Menue(Cart,Profile and Search-bar)--->

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
<input type="text" placeholder="Search for product..." name="search">
<button type="submit"><i class="fa fa-search"></i></button>
</form>

</div>

</div>

<!--end of Sub Menue(Cart,Profile and Search-bar)-->

<!--end of menue bar-->

</br>

<!--------Connect to the database----------------->

<?php
include_once 'config.php';

 $recordId = $_GET['ItmId'];

 
 $sql = "SELECT * FROM `item` WHERE Item_id = $recordId ";

 $result = $conn->query($sql);
 
 if($result -> num_rows > 0)
 {
    while($row = $result -> fetch_assoc())
  	{
    $id = $row["Item_id"];
    $name = $row["Item_name"];
    $price = $row["Item_price"];
    $qty = $row["Quantity"];
    $des = $row["description"];
    $picName = $row["Item_Picture_Name"];
	  }

  	echo"<div class='Column1'>";
   	echo" <div class='card1'>";
   		echo"<img src='uploads/".$picName."' width='270' height='250'>";
		echo" </br> ";
	
		echo" <b>";
	 	echo"<font size='5px' face='cursive'>".$name."</font></b>";
		 echo"</br>";
		echo" <font size='3px' face='cursive'>".$des."</font>";
		 echo"</br>";

		 echo"<font size='4px' color='red'>Rs.".$price."</font>";
	
		echo"</br>";
		echo"</br>";

		echo"<a class='cardbutton1' href='AddToCart.php?ItmId=$id'>Add To Cart</a>";

	echo"</div>";
 	echo"</div>";
 }

?>

<!--------End display database data----------------->

<!---shopping card end---->


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
<li class="list2"><a class="nav" href="index.php">HOME</a></li>
<li class="list2"><a class="nav" href="accessories.php">ACCESSORIES</a></li>
<li class="list2"><a class="nav" href="AboutUs.html">ABOUT US</a></li>
<li class="list2"><a class="nav" href="contactus.html">CONTACT US</a></li>
</ul>

</footer>

<!--footer End--->
	
</body>
</html>