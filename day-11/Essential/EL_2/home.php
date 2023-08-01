<?php

include "config.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department Wise Report</title>
</head>
<body>
    <form method="post" action="">
        Department:
        <select name="select_department">
            <option value="sales">Sales</option>
            <option value="Accounting">Accounting</option>
            <option value="marketing">Marketing</option>
            <option value="purchase">purchase</option>
        </select><br>
        <input type="submit" name="btn_submit"/>
    </form>
    <?php
    
    if(isset($_POST['btn_submit'])){

        $deprt = $_POST['select_department'];
        ?>
        <table>
            <tr>
                <th>ENO</th>
                <th>ENAME</th>
                <th>JOB</th>
                <th>HIRE DATE</th>
                <th>SALARY</th>
                <th>COMM</th>
                <th>DEPARTMENT</th>
            </tr>
            <?php
            
            $select_data = mysqli_query($con,"SELECT * FROM Employee_Master WHERE department='$deprt'");
            while($row = mysqli_fetch_array($select_data)){
                ?>
                <tr>
                    <td><?php echo $row['eno'];?></td>
                    <td><?php echo $row['ename'];?></td>
                    <td><?php echo $row['job'];?></td>
                    <td><?php echo $row['hire_date'];?></td>
                    <td><?php echo $row['salary'];?></td>
                    <td><?php echo $row['comm'];?></td>
                    <td><?php echo $row['department'];?></td>
                </tr>
                <?php
            }
            
            ?>
        </table>
        <?php

    }
    
    ?>
</body>
</html>