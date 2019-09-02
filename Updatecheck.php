<?php

error_reporting(0);
  
	require "DBCon.php";
	$conn= DBconnection();
	if(!$conn){
		echo "DB Error: ".mysqli_connect_error();
	}else{
		echo "Success Connectionssss <br/>";
	}

if(isset($_POST['submit'])){
	$id = $_POST['id'];
	$name = $_POST['name'];
	$price   = $_POST['price'];
	$description = $_POST['description'];
	$catgory   = $_POST['catgory'];
	$file	=	"upload/".$_FILES["file"]["name"];
	if($id == "" || $name == "" || $price == "" || $description == "" || $catgory == ""){
		echo "Nothing not be empty";
	}
	else
	{
		if(empty($_FILES["file"]["name"]))
		{
			$sql="UPDATE productentry SET name='$name',price='$price',catgory='$catgory',description='$description' where id=$id";
		}
		if(!empty($_FILES["file"]["name"]))
		{
			$sql="UPDATE productentry SET name='$name',file='$file' ,price='$price',catgory='$catgory',description='$description' where id=$id";
		}
		if(!mysqli_query($conn, $sql))
		{
			echo "not insert";
		}
		else
		{
			header("location:Viewproduct.php");
		} 
	}
}	
?>