<?php

$con = mysqli_connect("localhost","root","","mydb1");
if(!$con){
    die("Connection Failed: ".mysqli_connect_error());
}

?>