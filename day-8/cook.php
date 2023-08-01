<?php

    if(isset($_POST['chk_rem']))
    {
        setcookie("username",$_POST['text_user'],time() + (10),"/");
        setcookie("password",$_POST['text_pass'],time() + (10),"/");
        echo "Cookies are set successfully...!";
        echo "<br><br>Username: ".$_COOKIE["username"];
        echo "<br><br>Password: ".$_COOKIE["password"];
    }
    else{
        setcookie("username","");
        setcookie("password","");
        echo "cookies are not set!";
    }

?>