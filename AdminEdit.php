
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

<li class="list1"><div class="activeHome"><a class="nav" href="AdminDisplay.php">Display Item Details</a></div></li>

<li class="list1"><a class="nav" href="index.php">View Store</a></li>

</ul>
</div>
<br>
<!--Display Item Details table--->

<table border = '4' width = '95%' height = '20%'>

 <th class ="a">Item_Id</th>
 <th class="a">Item Name</th>
 <th class="a">Item Price</th>
 <th class="a">Quantity</th>
 <th class="a">Description</th>
 <th class = "a">Item Picture</th>

<!--------Edit database data----------------->

<!----Connect to the database---->

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
  
    echo "<tr><td>".$id."</td>";
    echo "<td>".$name."</td>";
    echo "<td>".$price."</td>";
    echo "<td>".$qty."</td>";
    echo "<td>".$des."</td>";

    echo "<td>";
    echo"<img src='uploads/".$picName."' width='200' height='150'>";
    echo "</td>";	
    echo "</table>";

 }

?>

<!--------retreve data & display from database ends----------------->

<hr>
<!--From begin--->
<div class="row1">

<div class="form1">
    
    <div class="form2">

    <b><center><font size="10px">Add Item</font></center></b>

  <form method="POST" action="AdminUpdateItem.php " enctype="multipart/form-data">
    
    <font size="6px">Item ID </font><i class="fas fa-passport fa-2x"></i>
    <font size="4px"color="red">Don't change Item Id</font>
    <input type="text" name="id" value=<?php echo"$id"?> >

    <font size="6px">Item Name </font><i class="fas fa-file-signature fa-2x"></i>
    <input type="text" name="name">

    <font size="6px">Item Price </font><i class="fas fa-dollar-sign fa-2x"></i></i>
    <input type="text" name="price">

    <font size="6px">Item Quantity </font><i class="far fa-arrow-alt-circle-down fa-2x"></i>
    <input type="text" name="qty">
    
  <font size="6px">Item Description</font>
  <input type="text" name="des">
  
  <b><center><font size="6px">Upload Item Image</font></center></b>
  <input type="file" name="image" class="button1">

  <input type="submit" name="upload" value="Update Details" class="button1">
    
  </form>

  </div>
</div>

</div>

<!--Form ends--->
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
