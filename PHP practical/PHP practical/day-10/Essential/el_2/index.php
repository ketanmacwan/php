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
    <title>MAIN PAGE</title>
</head>
<body><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-success" onclick="location.href='add_new.php'">Add Product</button>
    <br><br>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>IMAGE</th>
                <th>NAME</th>
                <th>DESCRIPTION</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
                $res = mysqli_query($con,"SELECT * FROM product_master");
                while($row = mysqli_fetch_array($res)){
                    ?>

            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><img src="<?php echo $row['image']; ?>" width="100" height="100"></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><button class="btn btn-info" onclick="location.href='edit.php?id=<?php echo $row['id']; ?>'">EDIT</button></td>
                <td><button class="btn btn-danger" onclick="location.href='delete.php?id=<?php echo $row['id']; ?>'">DELETE</button></td>
            </tr>

                    <?php
                }
            
            ?>
            
        </tbody>
    </table>
</body>
</html>