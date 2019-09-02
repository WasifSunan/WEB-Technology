<?php
	if(isset($_COOKIE['abc'])){
?>


<body>
    <table align="center" border="1px" height="100%" width="100%">
		<tr height="20px">
			<td>
				<a href="Home.php"><img valign="top" src="pet.png" height="47px" width="150px"></a>
				&nbsp;&nbsp;<font size="6" color="brown">Petmania</font><font size="3px" color="brown">Online pet shop</font>
				&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
				&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
				&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
				&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp	
				&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp				
				<a href="Adminpanel.php"><font size="5" color="brown">Home</font></a> |					
				<a href="Logout.php"><font size="5" color="brown">Logout</font></a>
			</td>
		</tr>
			
		<tr height="90%" valign="top">
			<td>
			</br>
				<center>
				</br>

<?php
	error_reporting(0);
	require "DBCon.php";
	$conn= DBconnection();

		$sql="SELECT * FROM reg";
		$result=mysqli_query($conn,$sql);
			
		echo "	
			<body method='post' align='center'>
				<center>
			<ul id='menu'>
			<li><a href = 'Viewproduct.php'>View Product</a></li>
			<li><a href = 'Productentry.php'>Product Entry</a></li>
			<li><a href = 'Viewcustomer.php'>Buyer</a></li>
			<li><a href = 'Viewregcustomer.php'>View Registered Customer</a></li>
			</ul> 
				</center>
				
			<table border='1'  width='100%'>
			<tr align='middle' >
			<th>User_Id</th>
			<th>User_Name</th>
			<th>Gender</th>
			<th>DOB</th>
			<th>Email</th>
			</tr>";
				
		while($row=mysqli_fetch_assoc($result)){
			echo " 
			<tr>
				<td align='middle'>".$row['id']."</td>
				<td align='middle'>".$row['username']."</td>
				<td align='middle'>".$row['gender']."</td>
				<td align='middle'>".$row['dd'].-$row['mm'].-$row['yyyy']."</td>
				<td align='middle'>".$row['email']."</td>	
			</tr>";	
				}
				echo " </table>";
			
		
	
?>


	<style>
	ul#menu {
		padding:0;
	}
	ul#menu li {
		display:inline;
	}
	ul#menu li a {
		background-color:cyan;
		color:black;
		padding: 10px 20px;
		text-decoration:none;
		border-radius: 4px 4px 0 0;
	}
	ul#menu li a:hover{
		background-color:deepskyblue
	}
	</style>
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
	<?php
	}
	?>
</table>
</body>

	