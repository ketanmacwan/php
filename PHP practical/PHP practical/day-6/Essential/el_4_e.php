<?php

    $arr = array(10,6,5,3,1,190,54,77,43,28,20,71,17,9,16);
    $sum = 0;

    foreach($arr as $value){
        if($value < 7)
        {
            $sum += $value;
            echo $value."<br>";
        }
    }

    echo "SUM Of number less than 7: $sum";

?>