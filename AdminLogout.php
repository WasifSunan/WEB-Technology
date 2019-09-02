<?php
	session_start();
	if(isset($_COOKIE['rm']))
	{
		setcookie ('rm','valid',time()-1,'/');
		header("location:AdminLogin.php");
	}
	else
	{
		setcookie ('abc','valid',time()-1,'/');
		header("location:AdminLogin.php");
	}
	session_destroy();
?>

<body>
    <table align="center" border="1px" height="100%" width="100%">
			<tr height="20px">
				<td>
					<a href="homenew.php"><img valign="top" src="pet.png" height="47px" width="150px"></a>
					&nbsp;&nbsp;<font size="6" color="brown">Petmania</font><font size="3px" color="brown">Online pet shop</font>
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp

					
					<a href="homenew.php"><font size="5" color="brown">Home</font></a> |					
					<a href="Login.php"><font size="5" color="brown">Login</font></a>  |
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
				<h1 style="color:brown;">Login</h1></br></center>
				<center>

				
				
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