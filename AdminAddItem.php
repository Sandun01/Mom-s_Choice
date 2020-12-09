<?php

Include_once 'config.php';

if(isset($_POST['upload']))
{
$target = "uploads/".basename($_FILES['image']['name']);
$uploadOk = 1;

$image = $_FILES['image']['name'];

$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$qty = $_POST['qty'];
$des = $_POST['des'];

$imagefiletype = strtolower(pathinfo($target,PATHINFO_EXTENSION));

//check file type
if($imagefiletype != "jpg" && $imagefiletype != "jpeg" && $imagefiletype != "gif" && $imagefiletype != "png")
{
    echo "<script> alert('Sorry:Only JPG,JPEG,PNG,GIF are Allowed')</script>";
    $uploadOk = 0;
}

//check file already exsist
if(file_exists($target))
{
    echo "<script> alert('Error:File Already Exsist')</script>";
    $uploadOk = 0;
}

//upload file
if($uploadOk == 1)
{
    if(move_uploaded_file($_FILES['image']['tmp_name'], $target ))
    {
    
    $sql = "INSERT INTO `item`(`Item_id`, `Item_name`, `Item_price`, `Quantity`, `description`, `Item_Picture_Name`) 
    VALUES('$id','$name','$price','$qty','$des','$image')";

    mysqli_query($conn,$sql);

    echo "<script> alert('Uploaded Sucessfully!!')</script>"; 
    header("Location:AdminDashboard.html");
    }

    else
    {
    echo "<script> alert('Error:could not able to execute')</script>";
    echo"<br><br><button type = 'submit'><a href = 'AdminDashboard.html'>Back To Dashboard</a></button>";
    echo"<br><br><button type = 'submit'><a href = 'AdminDisplay.php'>Display Items</a></button>";
    }

}

else
{
echo "<script> alert('Error uploading')</script>";
echo"<br><br><button type = 'submit'><a href = 'AdminDashboard.html'>Back To Dashboard</a></button>";
echo"<br><br><button type = 'submit'><a href = 'AdminDisplay.php'>Display Items</a></button>";
}

}

?>