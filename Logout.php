<?php
//delete cookies
session_start();
	if(isset($_COOKIE['rm'])){
		setcookie ('rm','valid',time()-1,'/');
		header("location:Login.php");
	}
	else{
	setcookie ('abc','valid',time()-1,'/');
	header("location:Login.php");
	}
	
session_destroy();
?>