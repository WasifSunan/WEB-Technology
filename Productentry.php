<?php
  error_reporting(0);
    
	require "DBCon.php";
	$conn= DBconnection();
	if(isset($_COOKIE['abc'])){
	if(isset($_POST['submit'])){

		//$id = $_POST['id'];
		$name = $_POST['name'];
		$price   = $_POST['price'];
		$description = $_POST['description'];
		$catgory   = $_POST['catgory'];
		$file	=	"upload/".$_FILES["file"]["name"];
		//$file   = $_FILES['file']['name'];
		//$file	=	"upload/".$_FILES["file"]["name"];
		
		if( $name == "" || $price == "" || $description == "" || $catgory == ""){
			echo "Nothing not be empty";
		}else{
				move_uploaded_file($_FILES['file']['tmp_name'], $file);
			$sql="INSERT into productentry values('', '$name','$price','$description','$catgory','$file')";

			
			if(!mysqli_query($conn, $sql)){
				echo "not insert";
			}
			else{
				//echo "insert";
				header("location:Viewproduct.php");
			} 
			
		}
	}
	

?>
<body>
    <table align="center" border="1px" height="100%" width="100%">
		<tr height="20px" >
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
				
				</ul>
			</center>
			
			
				<form method="post" action="#" enctype="multipart/form-data">
				<center>
					<table height="90%" width="50%">
						<tr>
							<br><br><center><h2>Product Entry </h2></center>	
						</tr>
						
						
						<tr>
							<th>Product Name :</th>
							<td><input type="text"placeholder="Name" name="name"><br><br></td>
						</tr>
	
						<tr>
							<th>Product view :</th>
							<td><input type="file" name="file" value="file"><br><br></td>
						</tr>
	
						<tr>
							<th>Price :</th>
							<td><input type="text"placeholder="Price" name="price"><br><br></td>
						</tr>
	
						<tr>
							<th>Description :</th>
							<td><input type="text"placeholder="Description" name="description"><br><br></td>
						</tr>	
	
						<tr>
							<th>Catgory :</th>
							<td><select name="catgory">
							<option value="cat">Cat</option>
							<option value="dog">Dog</option>
							<option value="bird">Bird</option></td>
						</tr>
				</table>
				</center>
				<center><br><br><input name="submit" type="submit" value="Submit"></center>
				</form>


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
