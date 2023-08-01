<?php
	for ($i=1;$i<=15;$i++) 
	{ 
		$array[] = rand(1,50);
	} 
	$sum = 0;

	foreach($array as $value){
		if ($value >= 25 && $value <= 45)
		{
			$sum = $sum + $value;
			echo $value."<br>";
		}
	}
	echo "sum of number between 25 and 45 : $sum";
?>