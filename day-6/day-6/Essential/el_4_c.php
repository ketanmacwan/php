<?php

    $arr = array(10,67,54,98,100,190,54,77,43,28,20,71,67,9,16);
    $sum = 0;

    foreach($arr as $value){
        if($value >= 25 && $value <= 45)
        {
            $sum += $value;
        }
    }

    echo "SUM Of number between 25 and 45: $sum";

?>