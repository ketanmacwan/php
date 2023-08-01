<?php

    if(isset($_POST['chkrem']))
    {
        setcookie("username",$_POST['txtUsername'],time() + (10),"/");
        setcookie("password",$_POST['txtPassword'],time() + (10),"/");
        echo "Cookies are set successfully...!";
        echo "<br><br>Username: ".$_COOKIE['username'];
        echo "<br><br>Password: ".$_COOKIE['password'];
    }
    else{
        setcookie("username","");
        setcookie("password","");
        echo "cookies are not set!";
    }

?>