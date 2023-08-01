<?php

   $con = mysqli_connect("localhost","root","","mydb1");

   if(!$con){
    die("Connection failed:".mysqli_connect_error());
   }

?>