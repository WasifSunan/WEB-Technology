<?php	
			//<center><input type='submit' name='submit' style='background-color:green;' value='Order'></br>

	$id 	= $_POST['id'];
	$conn = mysqli_connect('localhost', 'root', '', 'adminpanel');
	$sql = "select * from productentry where catgory like '".$id."%'";
	$result = mysqli_query($conn,$sql);
	$data ="";
	while($row = mysqli_fetch_assoc($result)){
		$data .=
			"<center><img src=".$row['file']." height='200px'></br>
			<center>".$row['name']."</br>
			<center>".$row['price']."</br>
			</div>";
			
	}
	echo $data;
?>
