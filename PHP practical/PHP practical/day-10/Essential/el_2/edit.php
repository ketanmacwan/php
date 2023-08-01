<?php

include "config.php";

$id = $_GET['id'];

if(isset($_POST['btn_edit'])){
    $name = $_POST['txtName'];
    $desc = $_POST['txtDesc'];

    $FileName = $_FILES['fup_image']['name'];
    $FileTmpLoc = $_FILES['fup_image']['tmp_name'];
    $file_loc = "images/". $FileName;
    move_uploaded_file($FileTmpLoc, $file_loc);

    $update_data = mysqli_query($con,"UPDATE product_master SET name='$name',description='$desc',image='$file_loc' WHERE id='$id'");
    if($update_data){
        echo "<script>alert('Data updated successfully...!');</script>";
        header('location: index.php');
    }
    else{
        echo "<script>alert('ERROR: updating data to database!');</script>";
        header('location: index.php');
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT PRODUCT FORM</title>
</head>
<body>
    <form method="post" action="" enctype="multipart/form-data">
        <?php
        
        $id = $_GET['id'];
        $select_data = mysqli_query($con,"SELECT * FROM product_master WHERE id='$id'");
        $fetch_data = mysqli_fetch_array($select_data);
        
        ?>
        <h1>EDIT PRODUCT FORM</h1>
        NAME:<input type="text" name="txtName" value="<?php echo $fetch_data['name']; ?>"/><br><br>
        Desc: <textarea name="txtDesc" rows="6" cols="30"><?php echo $fetch_data['description']; ?></textarea><br><br>
        Image: <input type="file" name="fup_image" required/><br><br>
        <button name="btn_edit">EDIT</button>
    </form>
</body>
</html>