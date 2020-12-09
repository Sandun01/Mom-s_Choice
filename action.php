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
<li class="list1"><div class="nav"><a class="nav" href="index.php">HOME</a></div></li>

<li class="list1"><a class="nav" href="accessories.php">ACCESSORIES</a>
</li>

<li class="list1"><a class="nav" href="AboutUs.html">ABOUT US</a></li>
<li class="list1"><a class="nav" href="contactus.html">CONTACT US</a></li>
<li class="list1"><a class="nav" href="adminlogin.php">ADMINISTRATION</a></li>

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

<form action ="action.php" method="GET">
<input type="text" placeholder="Search.." name="search">
<button type="submit"><i class="fa fa-search"></i></button>


</form>

</div>

</div>

<!--end of Sub Menue(Cart,Profile and Search-bar)-->

<!--end of menue bar-->

</br>

<!------Display data--->

<table border = '4' width = '85%' height = '50%'>

 
 <th class="a">Item Name</th>
 <th class="a">Item Price</th>
 <th class="a">Description</th>

<?php
	$servername = "localhost"; 
	$username = "root"; 
	$password = ""; 
	$dbname = "kids accessories shop";

	// Create connection 
	$conn = new mysqli($servername, $username, $password, $dbname); 

	// Check connection 
	if ($conn->connect_error) { 
		die("Connection failed: " . $conn->connect_error); 
	}
	 echo "Connected successfully"; 
	

$query = $_GET['search']; 
    // gets value sent over search form
     
    $min_length = 3;
    
     
    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents
         
        $sql= "SELECT * FROM item WHERE (`Item_name` LIKE '%".$query."%') || (`Item_price` LIKE '%".$query."%')|| (`description` LIKE '%".$query."%')";
        
        $result = $conn -> query($sql);
        $count = mysqli_num_rows($result);

        
        if(mysqli_num_rows($result) > 0){ // if one or more rows are returned do following
             

            
            while($results = mysqli_fetch_array($result)){
                // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
                
                //$id = $results['ID'];
                
                    // posts results gotten from database
                    echo "<tr><td>".$results['Item_name']."</td>";
                    echo "<td>".$results['Item_price']."</td>";
                    echo "<td>".$results['description']."</td></tr>";
                    
                
                    echo"<td><button type = 'submit'><a href ='cart.html?'>Add to cart</a></button></td>";
                   echo"<td><button type = 'submit'><a href = 'index.php? '>Back</a></button></td></tr>";
                }
                 
            }
            else{ // if there is no matching rows do following
                echo "No results";
            }
            
        }
        else{ // if query length is less than minimum
            echo "Minimum length is ".$min_length;
        }

        echo "</table>";
    ?>    
<hr>

<!---footer begin-->

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

<!--footer End-->
	
</body>
</html>

     
    



