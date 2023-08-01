<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate Result</title>
    <style>
        html{
            text-align: center;
            background-color: wheat;
        }
    </style>
</head>
<body>
    <form method="post">
        Roll No: <input type="text" name="txtrno" /><br><br>
        Name: <input type="text" name="txtName" /><br><br>

        
        <h2 style="text-decoration: underline;">Enter Marks</h2>
        Server side programming language: <input type="text" name="txtm1" /><br><br>
        Computer security: <input type="text" name="txtm2" /><br><br>
        Computer Networks: <input type="text" name="txtm3" /><br><br>
        information system: <input type="text" name="txtm4" /><br><br>
        DBMS: <input type="text" name="txtm5" /><br><br>
        <input type="submit" value="Calculate" name="txtCalculate" />&nbsp;&nbsp;<input type="reset" />
    </form>
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