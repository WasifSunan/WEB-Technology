
<html>
    <table align="center" border="1px" height="100%" width="100%">
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
			
        <tr height="100%">
            <td>			
                <table align="center">


				
<?php

	session_start();
	error_reporting(0);
	require "DBCon.php";
	$conn= DBconnection();
		if(isset($_COOKIE['abc'])){
	if(isset($_POST['submit'])){
		$id = $_POST['id'];
		//echo $id;
		$sql="SELECT * FROM productentry where id=".$id;
		//echo $sql;
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_assoc($result);	
		echo"<center><img src=".$row['file']." height='400px'></br></center>";
		echo "<center>Name :  ".$row['name']."</center></td>";
		echo "<center>Price : ".$row['price']." BDT</center></td>";
		echo "<center>Description : ".$row['description']."</td></br></br>";
	}
	//var_dump($_SESSION['cart']);	
	
?>
                    <td align="center">
						<form method="post" action="Cart.php">
							<input type="submit"style="background-color:skyblue;"name="submit"value="Add To Cart">
							<input type="hidden" name="id" value="<?php echo $row['id'];?>">
							<input type="hidden" name="name" value="<?php echo $row["name"] ;?>">
							<input type="hidden" name="price" value="<?php echo $row["price"];?>">
							<input type="hidden" name="description" value="<?php echo $row["description"];?>">
						</form>
						<form method="post" action="Userpage.php">
							<input type="submit"style="background-color:skyblue;"name="delete"value="Back To Home">
						</form>
	
                    </td>
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
