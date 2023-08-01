<?php
	$email = $_POST['text_email'];
	$password = $_POST['pwd_pass'];
	$pass=12345;
	$_SESSION['invalid']="invalid email id or password";
	if (!$email || !$password)
	{
			$_SESSION['error']='email &password both the fields are required';	
	}
	else
	{
		if($password==$pass)
		{
			echo "welcome&nbsp;&nbsp;&nbsp;<b>".$email."</b>";
		}
		else if($password!=$pass)
		{
			$_SESSION['invalid'];
			header("location:day8 q1.php");
		}
	}
	echo "<br><br>";
  echo "email :".$email."<br>";
  echo "password :".$password."<br>"; 

?>