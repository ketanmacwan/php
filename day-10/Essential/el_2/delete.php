<?php

include "config.php";

$id = $_GET['id'];

$delete_data = mysqli_query($con,"DELETE FROM product_master WHERE id='$id'");
if($delete_data){
    echo "<script>alert('Data deleted successfully...!');</script>";
    header('location: index.php');
}
else{
    echo "<script>alert('ERROR: deleting data from database!');</script>";
    header('location: index.php');
}

?>