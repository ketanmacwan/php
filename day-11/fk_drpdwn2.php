<?php 
 	$dept_name = $_POST['text_name'];
 	$name = $_POST['cmb_name'];
 	$con = mysqli_connect("localhost","root","","user_master");
 	$sql = "INSERT INTO temp(dept_name,dept_no) VALUES('$dept_name','$name')";
 	$result = mysqli_query($con,$sql); 
?>