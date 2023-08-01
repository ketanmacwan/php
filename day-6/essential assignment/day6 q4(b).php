<?php
	for ($i=1;$i<=15;$i++) 
	{ 
		$array[] = rand(1,50);
	}
	$sum = 0;

	foreach($array as $value){
		if ($value % 2 == 0)
		{
			$sum += $value;
			echo $value."<br>";
		}
	}
	echo "sum of even munber is : $sum";
?>