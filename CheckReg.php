<?php
error_reporting(0);
if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$confirmpassword = $_POST['confirmpassword'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$dd = $_POST['dd'];
	$mm = $_POST['mm'];
	$yyyy = $_POST['yyyy'];
	if($username=="" || $password=="" || $confirmpassword=="" || $email=="" || $gender=="" || $dd=="" || $mm=="" || $yyyy==""){
		echo "invalid";
	}
	else{
		$myfile=fopen("user.txt",'a');
		$data=$username. "|" .$password. "|" .$confirmpassword. "|" .$email. "|" .$gender. "|" .$dd. "|" .$mm. "|" .$yyyy. "\r\n";
		fwrite($myfile,$data);
		fclose($myfile);
		echo $data;
		header("location:Login.php");
	}
}
?>