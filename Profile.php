			
<html>
    <table align="center" border="1px" height="85%" width="100%">
		<tr height="20px">
			<td>
				<a href="Userpage.php"><img valign="top" src="pet.png" height="47px" width="150px"></a>
				&nbsp;&nbsp;<font size="6" color="brown">Petmania</font><font size="3px" color="brown">Online pet shop</font>
				&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
				&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
				&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
				&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
				&nbsp &nbsp &nbsp
					
				<a href="Userpage.php"><font size="5" color="brown">Home</font></a> |
				<a href="Profile.php"><font size="5" color="brown">Profile</font></a>  |
				<a href="Logout.php"><font size="5" color="brown">Logout</font></a> 
			</td>
		</tr>
		
        <tr height="100%" valign="top">
            <td>			
				<center>
					<h1>User Profile</h1>
				</center>
				
<?php

	error_reporting(0);
	session_start();
	require "DBCon.php";
	$conn= DBconnection();


	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($result);
	$username=$row['username'];
	$password=$row['password'];
	$confirmpassword=$row['confirmpassword'];
	$email=$row['email'];
	$gender=$row['gender'];
	$dd=$row['dd'];
	$mm=$row['mm'];
	$yyyy=$row['yyyy'];
	
		$id = $_POST['id'];
		if(empty($_SESSION['profile']))
		{
			$_SESSION['profile']=array();
		}
		array_push($_SESSION['profile'],$_POST['id']);
if(empty($_SESSION['profile']))
	{
		echo '<center><span style="color:red;">Where you are !!!</span>';
	}
	
	else
	{
	foreach($_SESSION['profile'] as $id)
	{
		$sql="SELECT * FROM reg where id=".$id;
		$result=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_assoc($result)){
			echo "$username";
					
		}
	}
	}
	 
?>



<?php
 error_reporting(0);

session_start();
echo $_SESSION["username"];
			echo $_SESSION["password"];
			echo $_SESSION["email"];
			echo $_SESSION["gender"];
?>