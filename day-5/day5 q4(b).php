<?php
	
    function sum_calc($no)
    {
    	$sum = 0; 
	for ($i=1;$i<=$no;$i++)
	{
          $sum = $sum + $i;
	}
	return $sum;
}
	echo "sum of number is:".sum_calc(5);

?>