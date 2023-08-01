<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style>
		html{
			text-align: center;
			background-color: wheat;
		}
	</style>
</head>
<body>
	Roll No : <input type="number" name="num_roll"><br>
	&nbsp;&nbsp;&nbsp;Name :  <input type="text" name="text_name">
	<br><br><br>
	<h2 style="text-decoration: underline;">Enter Marks</h2>
	server-side Wed programming: <input type="number" name="textm1"><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Computer Networks: <input type="number" name="textm2"><br>
	Business Information systems: <input type="number" name="textm3"><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;systems software: <input type="number" name="textm4"><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Information security: <input type="number" name="textm5"><br><br><br>
	<input type="submit" name="sub_calculate" value="calculate">&nbsp;&nbsp;<input type="reset">
</body>
</html>
<?php

        if(isset($_POST['txtCalculate']))
        {
            $m1 = $_POST['txtm1'];
            $m2 = $_POST['txtm2'];
            $m3 = $_POST['txtm3'];
            $m4 = $_POST['txtm4'];
            $m5 = $_POST['txtm5'];
            $total = $m1 + $m2 + $m3 + $m4 + $m5;
            $per = $total * 100 / 500;
            echo "<br>Total: <input type='text' value='".$total."' /><br><br>";
            echo "<br>Percentage: <input type='text' value='".$per."' /><br><br>";
            if($per >= 80 && $per <=100)
            {
                echo "<br>Grade: <input type='text' value='First' /><br><br>";
            }
            else if($per >= 60 && $per <= 79)
            {
                echo "<br>Grade: <input type='text' value='Second' /><br><br>";
            }
            else if($per >= 40 && $per <= 59)
            {
                echo "<br>Grade: <input type='text' value='Third' /><br><br>";
            }
            else{
                echo "<br>Grade: <input type='text' value='Fourth' /><br><br>";
            }

        }

?>