<!----Connect to the database---->

<?php
include_once 'config.php';

	$recordId = $_GET['ItmId'];
    
    
	$sql = "DELETE FROM item WHERE Item_id = '$recordId'";
	
	if(mysqli_query($conn, $sql)){
		echo "<script> alert('Records added successfully!!!!')</script>";
		header("Location:AdminDisplay.php");
	} 
	else{
        echo "<script> alert('ERROR: Could not able to execute)</script>" ;
	}
	 
	//Close connection
	mysqli_close($conn);

?>