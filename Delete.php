<?php
  error_reporting(0);
  
	require "DBCon.php";
	$conn= DBconnection();
	if(!$conn){
		echo "DB Error: ".mysqli_connect_error();
	}else{
		echo "Success Connection <br/>";
	}
	if(isset($_POST['delete'])){
	
		$id = $_POST['id'];
		$sql="DELETE from productentry WHERE id=".$id;

		if(!mysqli_query($conn, $sql)){
			echo "not insert";
		}
		else{
			header("location:ViewProduct.php");
		} 
	}
	
		
			
		
	
?>