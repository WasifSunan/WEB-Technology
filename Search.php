<?php	
			//<center><input type='submit' name='submit' style='background-color:green;' value='Order'></br>
error_reporting(0);
	$name = $_POST['name'];
	$key = $_POST['searchby'];
	$keyy = $_POST['searchbyprice'];
	$conn = mysqli_connect('localhost', 'root', '', 'adminpanel');
	$sql ="";	
if($name =="" ||$key=="" ||$keyy=="")
{
	echo"It is empty";
}	
	elseif($key == "bycat"){
		$sql = "select * from productentry where catgory like '".$name."%'";
	}
	elseif($keyy == "byprice"){

		$sql = "select * from productentry where price like '".$name."%'";
	}
	else
	{
		$sql = "select * from productentry where name like '".$name."%'";
	}

	$result = mysqli_query($conn,$sql);
	$data ="";
	$row = mysqli_fetch_assoc($result);

	while($row = mysqli_fetch_assoc($result)){

		$data .="
			<form method='post'action='Addcart.php'>
			<center><img src=".$row['file']." height='200px'></br>
			<center>".$row['name']."</br>
			<center>".$row['price']."</br>
			<center><input type='submit' name='submit' style='background-color:green;' value='Order'>
			<input type='hidden' name='id'value=".$row['id'].">
			<input type='hidden' name='name'value=".$row['name'].">
			<input type='hidden' name='price' value=".$row["price"]."
			<input type='hidden' name='description' value=".$row["description"]."
			</div></form>";
			
	}
	echo $data;
	
?>
