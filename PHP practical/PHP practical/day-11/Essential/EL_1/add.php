<?php

    include "config.php";
    if(isset($_POST['btn_submit'])){
        $country = $_POST['select_country'];
        $state = $_POST['select_state'];
        $city = $_POST['select_city'];

        $add_data = mysqli_query($con,"INSERT INTO mytable2(country,state,city) VALUES('$country','$state','$city')");
        if($add_data){
            echo "<script>alert('Data inserted successfully...!');</script>";
            header('location: home.php');
        }
        else{
            echo "<script>alert('ERROR: failed to insert the data...!');</script>";
            header('location: home.php');
        }
    }

?>