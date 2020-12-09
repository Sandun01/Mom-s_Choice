<?php
include_once 'config.php';

//--------------------get image id & data--------------------------

if(isset($_POST['upload']))
{
$target = "uploads/".basename($_FILES['image']['name']);
$uploadOk = 1;

$image = $_FILES['image']['name'];

//--------------------get image id--------------------------

$id = $_POST["id"];
$name = $_POST["name"];
$price = $_POST["price"];
$quantity = $_POST["qty"];
$des = $_POST["des"];

$imagefiletype = strtolower(pathinfo($target,PATHINFO_EXTENSION));

//check file type
if($imagefiletype != "jpg" && $imagefiletype != "jpeg" && $imagefiletype != "gif" && $imagefiletype != "png")
{
    echo "<script> alert('Sorry !! Only JPG,JPEG,PNG,GIF are Allowed')</script>";
    $uploadOk = 0;
}

//check file already exsist
if(file_exists($target))
{
    echo "<script> alert('Error Uploading File Already Exsist')</script>";
    $uploadOk = 0;
}

//upload file
if($uploadOk == 1)
{
    if(move_uploaded_file($_FILES['image']['tmp_name'], $target ))
    {

   //--------------------update records-------------------------- 

    $sql = "UPDATE `item` SET `Item_name`='$name',`Item_price`='$price',
    `Quantity`='$quantity',`description`='$des',`Item_Picture_Name`='$image' WHERE Item_id='$id' ";
        

    mysqli_query($conn,$sql);

    //echo "<script> alert('Updated Sucessfully!!')</script>"; 
    header("Location:AdminDashboard.html");
    }

    else
    {
    echo "<script> alert('Error:could not able to Update')</script>";
    echo"<br><br><button type = 'submit'><a href = 'AdminDashboard.html'>Back To Dashboard</a></button>";
    echo"<br><br><button type = 'submit'><a href = 'AdminDisplay.php'>Display Items</a></button>";
    }

}

else
{
echo "<script> alert('Error updating and uploading')</script>";
echo"<br><br><button type = 'submit'><a href = 'AdminDashboard.html'>Back To Dashboard</a></button>";
echo"<br><br><button type = 'submit'><a href = 'AdminDisplay.php'>Display Items</a></button>";
}

}

mysqli_close($conn);

?>




