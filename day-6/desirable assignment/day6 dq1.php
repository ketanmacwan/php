<?php
	for($i=1;$i<=15;$i++)
	{
		$arr[] = rand(1,50);
	}
	$min = 100000;
	foreach ($arr as $value)
	{
		if($value < $min)
		{
			$min = $value;
			echo $value.', ';
		}
	}
	echo "<br>minimum value : ".$min;
?>