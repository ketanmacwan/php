<?php

include "config.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap compiled CDN -->
    <link rel="stylesheet" href="bootstrap 4 CDN/css/bootstrap.min.css" type="text/css" />
    <script type="text/javascript" src="bootstrap 4 CDN/js/bootstrap.min.js"></script>

    <title>CRUD Operations</title>
    <style>
        *{
            padding: 0px;
            margin: 0px;
        }
        .main_div{
            width: 70%;
            background-color: lightgrey;
            height: 100vh;
            margin: auto;
        }
    </style>
</head>
<body>
    <div class="main_div">
        <center><h1>PHP-CRUD Operation</h1><br><br>
        <form method="post" action="add_new.php">
            FirstName:<input type="text" name="txtFname" required/>
            LastName:<input type="text" name="txtLname" required/>
            <button class="btn btn-success" name="btn_submit">Submit</button>
        </form></center><br><br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                $select_user = mysqli_query($con,"SELECT * FROM user_master");
                while($row = mysqli_fetch_array($select_user)){
                    ?>

                    <tr>
                        <td><?php echo $row['User_Id']; ?></td>
                        <td><?php echo $row['First_Name']; ?></td>
                        <td><?php echo $row['Last_Name']; ?></td>
                        <td>
                            <button class="btn btn-info" onclick="location.href='edit.php?id=<?php echo $row['User_Id']?>'">EDIT</button>
                            <a href="delete.php?id=<?php echo $row['User_Id']; ?>"><button class="btn btn-danger">DELETE</button></a>
                        </td>
                    </tr>

                    <?php
                }
                
                ?>
                
            </tbody>
        </table>
    </div>
</body>
</html>