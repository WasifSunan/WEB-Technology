<?php
	error_reporting(0);

	session_start();
	
	require "DBCon.php";
	$conn= DBconnection();
	
	if(!$conn)
	{
		echo "DB Error: ".mysqli_connect_error();
	}
	else
	{
		echo "Success Connection <br/>";
	}
	$user_check=$_SESSION['login_user'];
	$sql="SELECT username FORM reg WHERE username='$user_check'";
	$row=mysqli_fetch_assoc($sql);
	$login_session=$row['username'];
	
	
	?>
	