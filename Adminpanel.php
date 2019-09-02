<?php
session_start();
	error_reporting(0);
	if(isset($_COOKIE['abc']))
	{
?>
<body>
    <table align="center" border="1px" height="100%" width="100%">
		<tr height="20px" background="5.jpg">
			<td>
				<a href="Adminpanel.php"><img valign="top" src="pet.png" height="47px" width="150px"></a>
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

				<style>
					ul#menu 
					{
						padding:0;
					}
					
					ul#menu li 
					{
						display:inline;
					}
					
					ul#menu li a 
					{
						background-color:cyan;
						color:black;
						padding: 10px 20px;
						text-decoration:none;
						border-radius: 4px 4px 0 0;
					}
					
					ul#menu li a:hover
					{
						background-color:deepskyblue
					}
	
				</style>
	
	
			<center>
				<ul id="menu">
				<li><a href = "Viewproduct.php">View Product</a></li>
				<li><a href = "Productentry.php">Product Entry</a></li>
				<li><a href = "Viewcustomer.php">Buyer</a></li>
				<li><a href = "Viewregcustomer.php">View Registered Customer</a></li>
				<li><a href = "Adminlogoutsure.php">Logout</a></li>
				</ul>
			</center>
	


			<center>
				<br><br>
				<h1  style="color:brown;">Welcome Admin</h1>
				<img valign="top" src="c.jpg" height="80%" width="90%">
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