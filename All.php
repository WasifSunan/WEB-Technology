<?php
session_start();
include('config.php');
?>
<html>
<head>
</head>
<body>
<?php
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$confirmpassword = $_POST['confirmpassword'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
		$dd = $_POST['dd'];
		$mm = $_POST['mm'];
		$yyyy = $_POST['yyyy'];
		if(!$username || !$password|| !$confirmpassword || !$email || !$gender || !$dd || !$mm || !$yyyy){
		echo "<center>You need to fill in all of the required filds!</center>";
		}else{
if(strlen($username) > 32 || strlen($username) < 3){
			echo "<center>Your <b>Username</b> must be between 3 and 32 characters long!</center>";
			}
			if (!preg_match("/^[a-zA-Z. ]*$/",$username)) {
		echo"<center>Only letters and white space allowed";
	}
			else{
				$res = mysqli_query($con,"SELECT * FROM `reg` WHERE `username` = '".$username."'");
				$num = mysqli_num_rows($res);
				if($num == 1){ 
				echo "<center>The <b>Username</b> Username or Email already used!</center>";
				}else{
				if(strlen($password) < 5 || strlen($password) > 32){
			
				echo "<center>Your <b>Password</b> must be between 5 and 32 characters long!</center>";
				}else{
				
				
				if($password != $confirmpassword){
			
				echo "<center>The <b>Password</b> Password didn't match!</center>";
				}else{
			
				$checkemail = "/^[a-z0-9]+([_\\.-][a-z0-9]+)*@([a-z0-9]+([\.-][a-z0-9]+)*)+\\.[a-z]{2,}$/i";
				
				if(!preg_match($checkemail, $email)){
			
				echo "<center>The <b>E-mail</b> is not valid, must be name@server.tld!</center>";
				}else{
				
				$res1 = mysqli_query($con,"SELECT * FROM `reg` WHERE `email` = '".$email."'");
				$num1 = mysqli_num_rows($res1);
				if($num1 == 1){
				echo "<center> Username or Email already used</center>";
				}
				else{
				$registerTime = date('U');
				$code = md5($username).$registerTime;
				$res2 =
					mysqli_query($con,"INSERT INTO `reg` (`username`, `password`,`confirmpassword`, `email`,`gender`,`dd`,`mm`,`yyyy`, `rtime`) VALUES('".$username."','".$password."','".$confirmpassword."','".$email."','".$gender."','".$dd."','".$mm."','".$yyyy."','".$registerTime."')");
					echo "<center>You have successfully registered,!</center>";
							}
						}
					}
				}
			}
		}
	}
}
?> <table align="center" border="1px" height="100%" width="100%">
						<tr height="20px" >
				<td>
					<a href="Home.php"><img valign="top" src="pet.png" height="47px" width="150px"></a>
					&nbsp;&nbsp;<font size="6" color="brown">Petmania</font><font size="3px" color="brown">Online pet shop</font>
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp


					
					<a href="Home.php"><font size="5" color="brown">Home</font></a> |
					<a href="Login.php"><font size="5" color="brown">Login</font></a>  |
					<a href="All.php"><font size="5" color="brown">Registration</font></a>
				</td>
			</tr>
			<tr height="90%" valign="top">
				<td>
		<form method="post" action="All.php"> 
					<center>
					<table height="100%" width="100%">
						
								<br><br><br><br>
								<center> 
								<h1 style="color:brown;">Registration Form</h1>
								</center>
 								<br><br>
							
								UserName: <input type="text" name="username" placeholder="username">&nbsp &nbsp &nbsp  &nbsp
								<br><br>
  
								&nbsp &nbsp &nbsp  &nbsp Email: <input type="text" name="email" placeholder="sample@gmail.com">&nbsp &nbsp &nbsp  &nbsp
								<br><br>

  
								Gender:
								<input type="radio" name="gender" value="male">Male
								<input type="radio" name="gender" value="female">Female 
								&nbsp &nbsp &nbsp  &nbsp     <br><br>

  
								&nbsp DOB :
								<input name="dd"placeholder="Date" type="text" size="1">
								/<input  name="mm" placeholder="Month"type="text" size="1">
								/<input name="yyyy"placeholder="Year" type="text" size="1">&nbsp  &nbsp &nbsp <br/><br/>
  								
								&nbsp &nbsp Password: <input type="Password" name="password" placeholder="Atleast 6 charecter">&nbsp &nbsp &nbsp  &nbsp
								<br><br>
  
  
								Confirmpassword: <input type="Password" name="confirmpassword" placeholder="Confirm password">&nbsp &nbsp &nbsp  &nbsp
								<br><br>

								<input type="submit" name="submit" style="color:brown;" value="Submit"><br/><br/>
								<label>If already has an account <a href="Login.php">Sign In</a></label>
								</center>
							
		</table>
	</td></tr>
	<tr>
		<td>
			<table align="center">
				<tr>
					<td>Copyright@petmania</td>
				</tr>
				</table>
		</td>
	</tr>
</form>
</table>
	</body>
</html>