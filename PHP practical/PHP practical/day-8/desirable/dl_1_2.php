<?php

    if(isset($_POST['btn_submit']))
    {
        setcookie("item", $_POST['select_details'], time()+60, "/");
        echo "Item is: " . $_COOKIE['item'];
        if(isset($_POST['chkdetails'])){
            echo "<br>Show full record: True";
        }
        else{
            echo "<br>Show full record: False";
        }

        if(!isset($_COOKIE['item'])){
            echo "cookie is not set";
        }
        else{
            echo "cookie is set";
        }
    }

?>