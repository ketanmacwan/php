<?php

$n1 = 1;
$n2 = 10;
$count=0;

find_sum($n1,$n2);

function find_sum($n1,$n2)
{
    global $count;
    for($i=$n1;$i<=$n2;$i++)
    {
        if($i % 2 != 0)
        {
            $count += $i;
        }
    }
    echo "SUM: $count";
}

?>