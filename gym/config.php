<?php
	$con=mysqli_connect("localhost","root","sahil123","sahil");
	if(!$con)
	{
		echo "<script>window.location.assign('login.php?msg=Error while establishing connection with database')</script>";
	}
?>