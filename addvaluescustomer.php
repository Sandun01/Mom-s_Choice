<?php

include_once 'connection.php';

?>

<?php
/*$firstName = 'Saduni';
$lastName= 'Vithanage';
$username = 'saduni@gmail.com';
$password = 'Saduni1998';
$address = 'Malabe';

//secondsample person
$firstName = 'Himali';
$lastName= 'Konara';
$username = 'himali@gmail.com';
$password = 'himali98';
$address = 'Badulla';

//third sample person
$firstName = 'Lochana';
$lastName= 'Wijerathna';
$username = 'lochana@gmail.com';
$password = 'lochana2000';
$address = 'Colombo';

//forth sample person
$firstName = 'Chathuni';
$lastName= 'Weeraman';
$username = 'chathuni@gmail.com';
$password = 'chathuniR';
$address = 'Bandarawela';
//fifth sample person
/*$firstName = 'Yasiru';
$lastName= 'Pereira';
$username = 'yasiru@gmail.com';
$password = 'yasiru1997';
$address = 'Diyathalawa';*/

//$Amount = '4500.00';

/*$hashed_password = sha1($password);
//echo"HASHED : {$hashed_password}";

$query = "INSERT INTO customer(firstName,lastName, username,password,address) VALUES ('{$firstName}','{$lastName}','{$username}','{$hashed_password}','{$address}')";*/
$query = "INSERT INTO cart (Amount) VALUES ('5430')";

$result = mysqli_query($connection,$query);

if($result)
{
//header("Location:index.php");
	echo "1 Record added";
}
else
{
	echo "database query failed.";
}
//echo "<script> alert('Error:could not able to execute')";
