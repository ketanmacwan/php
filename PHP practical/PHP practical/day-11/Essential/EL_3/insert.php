<?php

require("config.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF file</title>
</head>
<body>
    <p><a href="generate.php" target="blank">Generate PDF</a></p>

    <table border="2">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Department</td>
            <td>date</td>
        </tr>
        <?php
        
        $select_data = mysqli_query($con,"SELECT * FROM tblemployee");
        while($row = mysqli_fetch_assoc($select_data)){
            ?>

        <tr>
            <td><?php echo $row['EmpId']; ?></td>
            <td><?php echo $row['EmpName']; ?></td>
            <td><?php echo $row['EmpDepartment']; ?></td>
            <td><?php echo $row['EmpRegDate']; ?></td>
        </tr>

            <?php
        }
        
        ?>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
</body>
</html>