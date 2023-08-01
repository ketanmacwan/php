<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Form</title>
</head>
<body>
    <form method="post" action="" enctype="multipart/form-data">
        Name: <input type="text" name="txtName" required /><br><br>
        Description: <textarea name="txtDesc" rows="6" cols="30"></textarea><br><br>
        Image: <input type="file" name="fup_image" /><br><br>
        <button name="btn_insert">ADD</button>
    </form>
</body>
</html>
<?php

    include "config.php";

    if(isset($_POST['btn_insert'])){

        $name = $_POST['txtName'];
        $desc = $_POST['txtDesc'];
        
        $FileName = $_FILES['fup_image']['name'];
        $Tmp_File = $_FILES['fup_image']['tmp_name'];
        $fileTmpLoc = "images/".$FileName;
        move_uploaded_file($Tmp_File, $fileTmpLoc);
        $add_data = mysqli_query($con,"INSERT INTO product_master(image,name,description) VALUES('$fileTmpLoc','$name','$desc')");
        if($add_data){
            echo "<script>alert('Data inserted successfully...!');</script>";
            header('location: index.php');
        }
        else{
            echo "<script>alert('ERROR: inserting data to database!');</script>";
            header('location: index.php');
        }

    }

?>