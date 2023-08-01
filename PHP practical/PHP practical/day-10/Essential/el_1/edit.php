<?php

$id = $_GET['id'];
include "config.php";
if(isset($_POST['btn_edit'])){
    $id = $_GET['id'];
    $fname = $_POST['txtFnameEdit'];
    $lname = $_POST['txtLnameEdit'];

    $edit_query = mysqli_query($con,"UPDATE user_master SET First_Name='$fname',Last_Name='$lname' WHERE User_Id=$id");
    if($edit_query){
        echo "<script>alert('Data updated successfully...!');</script>";
        header('location:index.php');
    }
    else{
        echo "<script>alert('ERROR: Updating data to database!');</script>";
        header('location:index.php');
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT PAGE</title>
</head>
<body>
    <h1>EDIT DATA</h1>
    <form method="post" action="">
        FirstName:<input type="text" name="txtFnameEdit" required />
        LastName:<input type="text" name="txtLnameEdit" required />
        <button name="btn_edit">EDIT</button>
    </form>
</body>
</html>