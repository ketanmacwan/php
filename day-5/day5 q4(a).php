<?php
$n1 = 10;
$n2 = 20;
$sum = 0;
find_sum($n1,$n2);

function find_sum($n1,$n2)
{
	global $sum;
	for($i=$n1;$i<=$n2;$i++)
	{
		if ($i % 2 != 0) 
		{
			$sum += $i;
		}
	}
	echo "sum: $sum";
}
?>