<?php

include "config.php";
$fname = $_GET['fname'];
$lname = $_GET['lname'];
$age = $_GET['age'];
$address = $_GET['address'];

$add_data = mysqli_query($con,"INSERT INTO table1(firstname,lastname,age,address) VALUES('$fname','$lname','$age','$address')");

?>

            <table class="table">
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Age</th>
                    <th>Address</th>
                </tr>
                <?php
                
                $select_data = mysqli_query($con,"SELECT * FROM table1");
                while($row = mysqli_fetch_assoc($select_data)){
                    ?>

                <tr>
                    <td><?php echo $row['firstname']; ?></td>
                    <td><?php echo $row['lastname']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                </tr>

                    <?php
                }
                
                ?>
                
            </table>