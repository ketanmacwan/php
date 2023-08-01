<?php

include "config.php";
if(isset($_POST['btn_submit'])){

    $name = $_POST['txtName'];
    $add = $_POST['txtAddress'];
    $contact = $_POST['txtCon'];
    $city = $_POST['txtCity'];
    $country = $_POST['txtCountry'];

    $add_data = mysqli_query($con,"INSERT INTO customer_master(Cust_Name, Address, City, Country, Contact_No) VALUES('$name','$add','$city','$country','$contact')");
    if($add_data){
        echo "<script>alert('Data inserted successfully..!!');</script>";
        header('location: index.php');
    }
    else{
        echo "<script>alert('ERROR: inserting data to the database..!!');</script>";
        header('location: index.php');
    }

}

?>