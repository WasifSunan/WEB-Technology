<?php
	session_start();
	$id = $_POST['id'];
	if(isset($_SESSION['cart']))
	{
		if(isset($_POST['remove']))
		{
			echo "id=".$id."</br>";
			$key = array_search($id, $_SESSION['cart']);
			unset($_SESSION['cart'][$key]);
			//session_destroy($id);
			header("location:Viewcart.php");
		}
	}
	else
	{
		echo"bal";
	}

?>



