<?php
error_reporting(0);
if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	if($username=="" || $password==""){
		header("location:AdminLogin.php?status=nullvalue");
	}
	else{
		if($username==admin && $password==admin){
			
					setcookie('abc','valid',time()+3600,'/');
					if($_POST['rm']=='on')
					{
					setcookie('rm','123',time()+3600,'/');
					}
					$isvalid = "validuser";
			
			
			//header("location:Viewproduct.php");
		}	
		if($isvalid == "validuser")
		{
			echo $_COOKIE['abc'];
			$_SESSION['abc']= "123";
			header("location:Adminpanel.php");
		}
		else
		{
			header("location:AdminLogin.php?status=invaliduser");
		} 
		
	}
}

?>