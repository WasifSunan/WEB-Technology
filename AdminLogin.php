<?php
	session_start();
	if(isset($_COOKIE['rm'])){
		header("location:Adminpanel.php");
	}
	else{
		if(isset($_GET['status'])){
		$status = $_GET['status'];

		if($status == "invaliduser"){
			echo '<center><span style="color:red;">Name or Password did not match !!!</span>';
		}else if($status == "nullvalue"){
			echo '<center><span style="color:red;">Name/Password not be null !!!</span>';
		}
	}
?>
<body>
    <table align="center" border="1px" height="100%" width="100%">
			<tr height="20px" background="5.jpg">
				<td>
					<a href="Home.php"><img valign="top" src="pet.png" height="47px" width="150px"></a>
					&nbsp;&nbsp;<font size="6" color="brown">Petmania</font><font size="3px" color="brown">Online pet shop</font>
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp

					
					<a href="Home.php"><font size="5" color="brown">Home</font></a> |					
					<a href="Login.php"><font size="5" color="brown">UserLogin</font></a>  |
					<a href="All.php"><font size="5" color="brown">Registration</font></a>
				</td>
			</tr>
			<tr height="90%" valign="top">
				<td>
	<center>
	<table>
		<tr>
			<td>
				<center>
					<br><br><br>
				<h1 style="color:brown;">Login</h1></br></center>
				<center>
				<form method="post" action="CheckAdminLogin.php">
					AdminName : <input type="text"placeholder="Name" name="username"><br/><br>
					Password &nbsp  &nbsp &nbsp: <input type="password"placeholder="Password" name="password"></br><br>
					Remember Me<input type="checkbox" name="rm"></br></br>
					<input name="submit" type="submit" style="color:brown;" Value="Submit"><br/><br/>
				</form>
				</center>
			</td>
		</tr>
	</table>
</center>
</td>
</tr>
<tr>
<td>
<table align="center">
	<tr>
		<td>Copyright@petmania</td>
	</tr>
</table>
</td>
</tr>
</table>
</body>
	
<?php
	}
?>