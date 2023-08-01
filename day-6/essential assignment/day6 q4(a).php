<?php
	$array = array(10,43,54,75,56,75,43,56,34,56,32,56,76,12,31);
	$sum = 0;

	foreach($array as $value){
		if ($value % 2 != 0)
		{
			$sum += $value;
			echo $value."<br>";
		}
	}
	echo "sum of odd munber is : $sum";
?>