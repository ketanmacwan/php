<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h1>PHP form validation example</h1>
	<form method="post" action="phpform.php">	
	Name :<input type="text" name="text_name">
	<font color="red">*&nbsp;</font><br>
	email : <input type="text" name="text_email">
	<font color="red">*&nbsp;</font><br>
	website : <input type="text" name="text_web"><br>
	comment : <textarea name="text_comment"></textarea><br>
	gender : <input type="radio" name="rdo_gender" value="female">female
	<input type="radio" name="rdo_gender" value="male">male
	<input type="radio" name="rdo_gender" value="other">other
	<font color="red">*&nbsp;</font><br>
	<input type="submit">
</form>
</body>
</html>