<?php
	error_reporting(0);
    require "DBCon.php";
	$conn= DBconnection();
	if(isset($_COOKIE['abc'])){
	if(isset($_POST['submit'])){

		$id = $_POST['id'];
		$name = $_POST['name'];
		$address   = $_POST['address'];
		$contact = $_POST['contact'];
		$email   = $_POST['email'];
		if($name == "" || $address == "" || $contact == "" || $email == ""){
			echo "Nothing not be empty";
		}
		else
		{
				
			$sql="INSERT into customer values('', '$name','$address','$contact','$email')";

			
			if(!mysqli_query($conn, $sql)){
				echo "not insert";
			}
			else{
				echo "insert";
				//header("location:Viewproduct.php");
			} 
			
		}
	}
?>	

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
					<a href="Logout.php"><font size="5" color="brown">Logout</font></a> 
				</td>
			</tr>
		
       <tr height="100%" valign="top">
         <td>			
           <table align="center">
			<tr>
				<td>
					<br><br><br>
				<center><h1>Please Pay Here</h1></center>
				<br><br>
					<center>
					<form method="post" action="#">
					
					&nbsp  &nbsp Name : 
					<input type="text"placeholder="Name" name="name"><br/><br/>
					
					Address : 
					<input type="text"placeholder="Address" name="address"><br/><br/>
		
					Contact :
					<input type="text"placeholder="11 digit" maxlength="11" minlength="11" name="contact"><br/><br/>
	
					&nbsp &nbsp Email :
					<input type="text"placeholder="Email" name="email"><br/><br/>
							 
					<center><input name="submit" type="submit" value="submit"></center>
					</form>
				</td>
			</tr>
		</table>
	</td>
</tr>
</table>




<table border="0" width="100%"height="200px"bgcolor="#FFA07A">
			<tr>
			 <td align="center">
			<center>
            <h3>Information</h3>
			<a href="whatisaes.php"><font size="3" color="brown">About US</font></a></br>
			</center>
			</td>
			
			<td align="center">
			<center>
            <h3>Work with us</h3>
			<a href="worktime.php"><font size="3" color="brown">Work Time</font></a></br>
			</center>
			</td>
			
			<td align="center">
			<center>
            <h3>Contact Us</h3>
			<a href="officeaddress.php"><font size="3" color="brown"> Address</font></a></br>			
			</center>
			</td>
        </tr>
	</table>
	
	<table border="1" width="100%">
			<tr>
			<center>
            <td align="center">Copyright&copy; petmania</td>
			</center>
        </tr>
	</table>
</body>
<?php
	}
	?>