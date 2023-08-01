<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h1>CUSTOMER ENTRY FORM</h1>
	<font color="red">* Required fields</font>
	<br><br>
	<form method="post" action="db2.php" enctype="multipart/form-data">
	<font color="red"></font>
	customer Name : <input type="text" name="cust_text">
	<br><br>
	Addres : <textarea name=text_add></textarea>
	<br><br>
	city : <select name="city">
		<option value="surat">surat</option>
		<option value="ahemdabad">ahemdabad</option>
		<option value="rajkot">rasjkot</option>
		<option value="gir somnath">gir somnath</option>
	</select>	
	<br><br>	
	country: <select name="country">
		<option value="india">india</option>
		<option value="USA">USA</option>
		<option value="UK">UK</option>
	</select>
	<br><br>
	contact No: <input type="number" name="cont_no">
	<br><br>
	<input type="submit">
	<input type="reset">
</form>
</body>
</html>