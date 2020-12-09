
<!DOCTYPE HTML>
<html>
<head>
<title>Mom's Choice</title>

<link rel="stylesheet" type="text/css" href="styles/Admin.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">

<style>

#theme1
    {
    background: url(pictures/admintheme1.jpg);
    }

.checked
	{
		color:rgba(255, 187, 0, 0.801);
    }


table
 {
 font-weight: bold;
 background-color: rgb(196, 196, 255);  
 margin-top: 15px;
 margin-bottom: 10px;
 margin-left: 10px;
 margin-right: 10px;
 border-style: groove;
 border-color: blue;
 padding: 3px;
 }

th
{
border: 4px solid blue;
}

td
{
 text-align: center;
 font-size: 20px;
 border: 2px solid blue;
}

th.a
{
 font-size: 25px;
 text-align: center;
}

td button
{
    background-color: rgb(196, 196, 255);
    border:0;
}

td a
{
    text-decoration: none;
    background-color: rgb(189, 4, 4);
    padding: 10px 25px;
    margin-left: 5px;
    color:#fff;
    font-size: 15px;
}

a:hover
{
    background-color:#ff0; 
    color:#000;
}


</style>

</head>

<body>

<!--Admin logo-->

<div class="top1">
<img src="pictures/56.png" width="350" height="150">

<font class="top2">Administration</font>

<img class="logo1" src="pictures/admin1.png" width="200" height="150">

</div>

<!--Admin logo Ends-->

<hr>

<!--Start of menue bar-->
<!--Main Menue bar-->

<div class="nav1">

<ul class="nav2">
<li class="list1"><a class="nav" href="AdminDashboard.html">Dashboard</a></li>

<li class="list1"><a class="nav" href="AdminAddItem.html">Add Items</a></li>

<li class="list1"><div class="activeHome"><a class="nav" href="#">Display Item Details</a></div></li>

<li class="list1"><a class="nav" href="index.php">View Store</a></li>

</ul>
</div>

<hr>

<!--Display Item Details begin--->

<table border = '4' width = '85%' height = '50%'>

 <th class ="a">Item_Id</th>
 <th class="a">Item Name</th>
 <th class="a">Item Price</th>
 <th class="a">Quantity</th>
 <th class="a">Description</th>
 <th class = "a">Item Picture</th>
 <th class = "a">Edit</th>
 <th class = "a">Delete</th>


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
	echo "<tr><td>".$row['Item_id']."</td>";
    echo "<td>".$row['Item_name']."</td>";
    echo "<td>".$row['Item_price']."</td>";
    echo "<td>".$row['Quantity']."</td>";
    echo "<td>".$row['description']."</td>";

    echo "<td>";
    echo"<img src='uploads/".$row['Item_Picture_Name']."' width='100' height='50'>";
    echo "</td>";	

	echo"<td><button type = 'submit'><a href ='AdminEdit.php?ItmId=$id'>Edit</a></button></td>";
	echo"<td><button type = 'submit'><a href = 'AdminDelete.php?ItmId=$id'>Delete</a></button></td></tr>";
	}
	
}
else
	{
	echo "<br> No results found";
	}
echo "</table>";

?>

<!--------retreve data & display from database ends----------------->

<hr>

<!--footer begin--->

<footer id = "theme1">

<div class="socialmedia">
<a class="socialmedia1" href="https://www.facebook.com"><i class="fab fa-facebook-square fa-2x"></i></a>

<a class="socialmedia1" href="https://www.instagram.com"><i class="fab fa-instagram fa-2x"></i></a>
<a class="socialmedia1" href="https://twitter.com/login"><i class="fab fa-twitter-square fa-2x"></i></a>
<a class="socialmedia1" href="https://www.google.com/intl/si/gmail/about/#"><i class="fab fa-google-plus-square fa-2x"></i></i></a>
<a class="socialmedia1" href="https://www.whatsapp.com"><i class="fab fa-whatsapp-square fa-2x"></i></a>
</div>

<ul class="nav3">

  <li class="list2"><a class="nav" href="AdminDashboard.html">Dashboard</a></li>

  <li class="list2"><a class="nav" href="AdminAddItem.html">Add Items</a></li>
                
  <li class="list2"><div class="activeHome"><a class="nav" href="AdminDisplay.html">Display Item Details</a></div></li>
  
  <li class="list1"><a class="nav" href="index.php">View Store</a></li>

</ul>

</footer>

<!--footer End--->
	
</body>
</html>
