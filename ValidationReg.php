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
		
			//if (empty($_POST["username"])) {
				//$username = "Name is required";
			//}				
			//else {
				//if((char <65 || char>90)&&(char<97 || char>122 )){	

				 //		echo $username;
				//}
				//else {
				//		echo "User name Only letters";
				//}
			//}
			
			if (empty($_POST["username"])) {
				$username = "Name is required";
			}
			else{
				if(preg_match('/[^A-Za-z0-9]/',$username))
				{
					$username = "Only Lettrs an number are allowed";
				}
				else{
					echo $username;
				}
			}
		
		
		
		
			//if (empty($_POST["username"])) {
				//$username = "Name is required";
			//} else {
			//	if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
			//		$username = "Only letters and white space allowed"; 
			//	}
			//}
			
			
			
			
			
			
			
			
			
			
			if (empty($_POST["password"])) 
			{
				
				$password = "Password is required";		
			} 
			else{
				if(strlen($password)>=6)
				{
					echo $password;
				}
				else{
					$password = "Atleast 6 letter input";
				}
			}
					
					
					
	
			if (empty($_POST["confirmpassword"])) 
			{
				$confirmpassword = "Confirmpassword is required";
			} 
			else{
				if($password==$confirmpassword)
				{
					echo $confirmpassword;
				}
				else{
					$confirmpassword = "your password did not match";
				}
			}
			
			
			
			
			
			if (empty($_POST["email"])) {
				$email = "Email is required";
			}
			else{
					if($_POST["email"]) {
						$arr = explode("@",$email);
						if(count($arr)>=2)
						{
							$lastindex = $arr[count($arr)-1];
							$arr = explode(".",$lastindex);
							if(count($arr)>=2)
								{
								if($arr[0]=="")
								{
									$email = "'@' and '.' do not sit beside";
								}
								elseif($arr[count($arr)-1]=="")
								{
									$email = "'.' can not be last word";
								}
								else{
									echo $email;
								}
							}
							else{
								$email ="There has no (.)";
							}
						}
						else
						{
							$email = "There has no (@)";
						}
					}
			}
			
	
			
			if (empty($_POST["gender"])) 
				{
				$gender = "Gender is required";
			}
			else{
				if($_POST["gender"]=="Male")
				{
					$gender = "You are Male";
				}
				else{
					$gender = "You are Female";
				}
			}
	
			if (empty($_POST["dd"])) 
			{
				$dd = "Date is required";
			}else{
				if(preg_match('/[^0-9]/',$dd)){
					
					$dd ="Only number are Allowed";
				}
				else{	
					if(strlen($dd)<3)
					{
						if(($dd)<=12){							
							echo $dd;
						}
						else{
							$dd = "Date can not possible";
						}							 
					}
					else{
						$dd = "Atleast 2 letter input";
					}
				}
			}
	
			if (empty($_POST["mm"])) 
			{
				$mm = "Month is required";
			}else{
				if(preg_match('/[^0-9]/',$mm)){
					
					$mm ="Only number are Allowed";
				}
				else{	
					if(strlen($mm)<3)
					{
						if(($mm)<=12){							
							echo $mm;
						}
						else{
							$mm = "Month can not possible";
						}							 
					}
					else{
						$mm = "Atleast 2 letter input";
					}
				}
			} 
			
			if (empty($_POST["yyyy"])) 
			{
				$yyyy = "yyyy is required";
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
  
  <form method="post" action="#">  
  
  UserName: <input type="text" name="username" placeholder="username">&nbsp &nbsp &nbsp  &nbsp
  <?php echo $username;?>
  <br><br>
  
  Password: <input type="password" name="password" placeholder="Atleast 6 charecter">&nbsp &nbsp &nbsp  &nbsp
  <?php echo $password;?>
  <br><br>
  
  
  Confirmpassword: <input type="password" name="confirmpassword" placeholder="Confirm password">&nbsp &nbsp &nbsp  &nbsp
  <?php echo $confirmpassword;?>
  <br><br>
  
  
    Email: <input type="text" name="email" placeholder="sample@gmail.com">&nbsp &nbsp &nbsp  &nbsp
    <?php echo $email;?>
    <br><br>
  
  
  

  
  Gender:
  <input type="radio" name="gender" value="male">male
  <input type="radio" name="gender" value="female">Female &nbsp &nbsp &nbsp  &nbsp 
  <?php echo $gender;?>
  <br><br>
  
	DOB :
	<input name="dd"placeholder="Date" type="text" size="1">
	/<input  name="mm" placeholder="Month"type="text" size="1">
	/<input name="yyyy"placeholder="Year" type="text" size="1">&nbsp &nbsp &nbsp  &nbsp <?php echo $dd;?>&nbsp &nbsp &nbsp  &nbsp<?php echo $mm;?> &nbsp &nbsp &nbsp  &nbsp <?php echo $yyyy;?>

	<br/><br/>
  

  
  
  
    <input type="submit" name="submit" value="Submit">  
	</form>
	
	