<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shoppingcart";


$conn = new mysqli($servername, $username, $password,$dbname);


if ($conn->connect_error)
{
 die("Database Connection failed " . $conn->connect_error);
}
echo "Database Connected successfully";

?>

<?php

if(isset($_POST['upload']))
{
$target = "uploads/".basename($_FILES['image']['name']);
$uploadOk = 1;

$image = $_FILES['image']['name'];
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
    
    $sql = "INSERT INTO `pictures`(`id`, `name`, `discription`) VALUES('','$image','$des')";
    mysqli_query($conn,$sql);

    echo "<script> alert('Image Uploaded Sucessfully!!')</script>"; 
    }

    else
    {
    echo "<script> alert('Error:could not able to execute')</script>";
    }

}

else
{
echo "<script> alert('Error uploading')</script>";
}

}

?>