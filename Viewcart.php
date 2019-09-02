<?php
	if(isset($_COOKIE['abc'])){ 
?>
<html>
    <table align="center" border="1px" height="85%" width="100%">
									<tr height="20px" >
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
				
<?php
	error_reporting(0);
	session_start();
	require "DBCon.php";
	$conn= DBconnection();
	if(empty($_SESSION['cart']))
	{
		echo '<center><span style="color:red;">You did not Order anything !!!</span>';
	}
	else{
	echo "

		<table border='1'  width='100%'>
			<tr align='middle' bgcolor='tomato'valign='top'>
				<th>Name</th>
				<th>Image</th>
				<th>Price</th>
				<th>Catgory</th>
				<th colspan='50%'>Action</th></br>
			</tr>";
	foreach($_SESSION['cart'] as $id)
	{
		$sql="SELECT * FROM productentry where id=".$id;
		$result=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_assoc($result)){
			echo "
				<tr  bgcolor='	coral'>
					<td align='middle'>".$row['name']."</td>
					<td align='middle'><img src=".$row['file']." height='100px'></td>
					<td align='middle'>".$row['price']."</td>
					<td align='middle'>".$row['catgory']."</td>		
					<td align='middle'>
					<form action='Remove.php' method='post'>
						<input type='submit'style='background-color:white;'name='remove'value='Remove'>
						<input type='hidden' name='id' value='".$row['id']."'/>
					</form>
					</td>
				</tr>";	
		}
	}
	echo " </table></br>";
	
?>
<form method="post" action="Paymentuser.php">
	<center>
		<input type="submit" style="background-color:indianred;" name="submit" value="Payment" >
	</center>
</form>
  </td>
  <?php
	}
?>
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
<?php
	}
?>