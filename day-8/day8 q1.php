
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>form validation</title>
</head>
<body>
	<h3><font color="red">
		<?php 
		if(isset($_SESSION['error']))
		{
			echo $_SESSION['error']."<br>";
		}
		else if(isset($_SESSION['invaild']))
		{
			echo $_SESSION['invaild'];
		}
		session_unset();
		?>
	</font></h3>
	<form method="post" action="pass.php">
	Email id : <input type="text" name="text_email"><br><br>
	password : <input type="password" id="pwd" name="pwd_pass"><br><br>
	<input type="submit">
</form>
</body>
</html>