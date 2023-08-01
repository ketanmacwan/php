<?php

include "config.php";

if(isset($_POST['btn_submit'])){

    $fname = $_POST['txtFname'];
    $lname = $_POST['txtLname'];

    $add_data = mysqli_query($con,"INSERT INTO user_master(First_Name,Last_Name) VALUES('$fname','$lname')");
    if($add_data){
        echo "<script>alert('Data inserted successfully...!');</script>";
        header('location:index.php');
    }
    else{
        echo "<script>alert('ERROR: Inserting data to database!');</script>";
        header('location:index.php');
    }

}

?>