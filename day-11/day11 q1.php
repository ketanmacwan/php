<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
		<?php
		$con = mysqli_connect("localhost","root","","user_master");
		$sql = "SELECT * FROM dept_master";
		$result = mysqli_query($con,$sql);
		?>
		<form method="post" action="fk_drpdwn2.php">
		dept_name: <input type="text" name="text_name">
		<br><br>
		select name:
		<select name="cmb_name">
			<?php
			while($row = mysqli_fetch_array($result))
			{?>
				<option value="<?php echo $row['dept_no'];?>"><?php echo $row['dept_name'];?></option>
			<?php	
			}?>
		</select>
		<br><br>
		<input type="submit">
		</form>
</body>
</html>