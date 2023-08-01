<?php

    $no = 5;
    $sum = 0;
    calc_sum($no);

    function calc_sum($n){
        global $sum;
        for($i=1;$i<=$n;$i++)
        {
            $sum += $i;
        }

        echo "SUM of number is: $sum";

    }

?>