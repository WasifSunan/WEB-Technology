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
	
	
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username=="" || $password==""){
			header("location:Login.php?status=nullvalue");
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
		

		else{	
		
		$sql="SELECT * FROM reg where username='$username' and password='$password'";
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_assoc($result);
		$id=$row['id'];
		//$id=$_GET['id'];
			//$myfile = fopen("user.txt", 'r');
			//$isvalid = "";
			//while (!feof($myfile))
			//$data = fgets($myfile);
			//$arr = explode("|",$data);
			if($row['username']==$username && $row['password']==$password)
			{
				setcookie('abc','valid',time()+3600,'/');
				if($_POST['rm']=='on')
				{
					setcookie('rm','123',time()+3600,'/');
				}
				$isvalid = "validuser";
			}
						
		if($isvalid == "validuser"){
			echo $_COOKIE['abc'];
			$_SESSION['abc']= "123";
			//$_SESSION['login_user']=$username;
			header("location:Userpage.php?");


		}
		else{
			header("location:Login.php?status=invaliduser");
		} 
	
	}
	}
}

?>