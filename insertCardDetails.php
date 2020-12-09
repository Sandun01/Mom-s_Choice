<?php

include_once 'connection.php';

?>

<?php

$cHolderName= $_POST["field2"];
$cardno = $_POST["field3"];
$cvv = $_POST["field4"];

$sql = "INSERT INTO payment (cardHName,cardNo,cvv) 
 VALUES ('{$cHolderName}','{$cardno}','{$cvv}')"; 
 
/*if(mysqli_query($conn,$sql))
{
header("Location:index.php");
}

else
{
echo "<script> alert('Error:could not able to execute')";
}*/


$result = mysqli_query($connection,$sql);

if($result)
{
	header("Location: index.php");
	//echo "1 Record added";
}
else
{
	echo "database query failed.";
}


?>