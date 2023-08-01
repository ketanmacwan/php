<?php

session_start();

$time = $_SESSION['time'];


if(time() > $time){
    session_destroy();
    header('location:login.php');
}
else{
    echo "session active";
}

?>