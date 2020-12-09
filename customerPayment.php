<?php require_once('connection.php'); ?>
<?php
	

	$query = "SELECT 'firstName','lastName','username','address' FROM 'customer' WHERE 'username' = 'lochana@gmail.com'";

	$result_set = mysqli_query($connection,$query);

	if ($result_set)
	{
		while ($row = mysqli_fetch_assoc(result_set))
		{
			<label><i class="fas fa-user"></i>Full Name: echo $row['firstName']<br/></label>

		}
	}

?>
<?php mysqli_close($connection); ?>