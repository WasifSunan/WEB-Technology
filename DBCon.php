<?php

	function DBconnection(){
		$conn= mysqli_connect('localhost', 'root', '', 'adminpanel');

		return $conn;
	}
	

?>