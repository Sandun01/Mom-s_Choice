<?php
{
	include_once 'config.php';
    }


if(isset($_POST["submit"])){

     
    $name = $_POST["userName"];
    $email = $_POST["Email"];
    $description = $_POST["Description"];

    $sql1 = "INSERT INTO contactus VALUES ('','$name','$email','$description')" ;

    if($conn->query($sql1))
    {
        echo "<script> alert('Inserted successfully')</script>"; 
        header("location: contactus.html ");
    }
    else{
        echo "Error ".$con->error;
    }
}

?>

