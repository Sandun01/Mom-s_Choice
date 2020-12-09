<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kids accessories shop";


$conn = new mysqli($servername, $username, $password,$dbname);


if ($conn->connect_error)
{
 die("Database Connection failed " . $conn->connect_error);
}
//echo "<script> alert('Connected Successfully!!')</script>";
?>