<?php
	  $n1 = 1;
    $n2 = 10;
    $sum = 0;
    find_sum($n1,$n2);
    function find_sum($n1,$n2){
        global $sum;
        for($i=$n1;$i<=$n2;$i++)
        {
               if($i % 3 == 0){
                $sum += $i;
            }
        }
    }
    echo "SUM: $sum";
?>