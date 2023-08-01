<?php

    if(isset($_POST['chkrem']))
    {
        setcookie("username",$_POST['txtUsername'],time() + (86400 * 30),"/");
        setcookie("password",$_POST['txtPassword'],time() + (86400 * 30),"/");
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