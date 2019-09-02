<?php
	if(isset($_COOKIE['abc'])){
?>

<body>
    <table align="center" border="1px" height="100%" width="100%">
			<tr height="20px" >
				<td>
					<a href="Adminpanel.php"><img valign="top" src="pet.png" height="47px" width="150px"></a>
					&nbsp;&nbsp;<font size="6" color="brown">Petmania</font><font size="3px" color="brown">Online pet shop</font>
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp
					&nbsp &nbsp &nbsp 
					
					<a href="Adminpanel.php"><font size="5" color="brown">Home</font></a> |	
					<a href="Logout.php"><font size="5" color="brown">Logout</font></a>
				</td>
			</tr>
			
			<tr height="70%" valign="top">
				<td>
				</br>
		<center>
			<br><br><br>
			<ul id='menu'>
			<li><a href = 'Viewproduct.php'>View Product</a></li>
			<li><a href = 'Productentry.php'>Product Entry</a></li>
			<li><a href = 'Viewcustomer.php'>Buyer</a></li>
			<li><a href = 'Viewregcustomer.php'>View Registered Customer</a></li>
			</ul> 
			</center>
			<center>
				<br><br>
			<h1  style="color:deepskyblue;">Are you sure??</h1>
			<h2><a style="color:red;" href = "Logout.php">Logout!!</a><h2>
			</center>
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
	</table>

				<table border="1" align="center"  width="100%">
		<tr>
			<td align="middle">Copyright@petmania</td>
		</tr>
</table>
<?php
	}
	?>
</body>
