<?php

$con = mysqli_connect("localhost","root","","mydb1");
if(!$con){
    die("ERROR: Cooection failed: ".mysqli_connect_error());
}

?>