<?php

    $arr = array(10,67,54,98,100,190,54,77,43,28,20,71,67,9,16);
    $sum = 0;

    foreach($arr as $value){
        if($value > 13)
        {
            $sum += $value;
            echo $value."<br>";
        }
    }

    echo "SUM Of number greater than 13: $sum";

?>