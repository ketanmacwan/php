<?php
if(!empty($_POST))
{
	 $name = $_POST['cust_text'];
	 $address = $_POST['text_add'];
	 $contect = $_POST['cont_no'];
	 $city = $_POST['city'];
	 $country = $_POST['country'];	

	$con = mysqli_connect('localhost','root','','user_master');
	if(!$con)
	{
		die("connection error.."); 
	}
	$sql = "INSERT INTO tbl_test(name,address,contect,city,country) VALUES('$name','$address','$contect','$city','$country')";
	echo $sql;
	$result=mysqli_query($con,$sql);
	if ($result == false) {
		echo "error while inserting recoed."?>
		<br><br>
		<a href="day10 q1.php">try again</a>
		<?php
		}

	else 
	{
		echo "record inserted."?>
		<br><br>
		<a href="day10 q1.php">insert another record</a>
		<?php
		
	}
}
else 
{
	header("location:day10 q1.php");
}


?>