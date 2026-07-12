<?php
	$con=mysqli_connect("localhost","root","","gym");
	if(!$con)
	{
		echo "<script>window.location.assign('login.php?msg=Error while establishing connection with database')</script>";
	}
?>