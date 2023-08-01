<?php

include "config.php";
$id = $_GET['id'];

$del_query = mysqli_query($con,"DELETE FROM user_master WHERE User_Id=$id");
if($del_query){
    echo "<script>alert('Data deleted successfully...!');</script>";
    header('location:index.php');
}
else{
    echo "<script>alert('ERROR:Deleting data from database!');</script>";
    header('location:index.php');
}

?>