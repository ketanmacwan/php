<!DOCTYPE html>
<html>
<?php 
 session_start();
?>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<font color="red">
		<?php
		if(isset($_SESSION['error']))
		{
			//var_dump($_SESSION);
			$name = $_SESSION['post_values']['text_name'];
			$email = $_SESSION['post_values']['text_email'];
			$web = $_SESSION['post_values']['text_web'];
			$comment = $_SESSION['post_values']["text_comment"];
			$gender = $_SESSION['post_values']["rdo_gender"];
			echo $_SESSION['error'].'<br><br>';
		}
		?>
	</font>
	<h1>PHP form validation example</h1>
	<form method="post" action="phpform.php">	
	name :<input type="text" name="text_name" value="<?php echo $name; ?>">
	<font color="red">*&nbsp;</font><br>
	email : <input type="text" name="text_email" value="<?php echo $email; ?>">
	<font color="red">*&nbsp;</font><br>
	website : <input type="text" name="text_web" value="<?php echo $web; ?>"><br>
	comment : <textarea name="text_comment"><?php echo $comment ?></textarea><br>
	gender : <input type="radio" name="rdo_gender" value="female" <?php if($gender== 'female'){?>checked="true"<?php }?>>female
	<input type="radio" name="rdo_gender" value="male" <?php if($gender== 'male'){?>checked="true"<?php }?>>male
	<input type="radio" name="rdo_gender" value="other" <?php if($gender== 'other'){?>checked="true"<?php }?>>other
	<font color="red">*&nbsp;</font><br>
	<input type="submit">
</form>
</body>
</html>