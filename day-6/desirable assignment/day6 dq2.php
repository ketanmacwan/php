<?php
	for($i=1;$i<=15;$i++)
	{
		$arr[] = rand(1,50);
	}
	$max = 0;
	foreach ($arr as $value)
	{
		if($value > $max)
		{
			$max = $value;
			echo $value.', ';
		}
	}
	echo "<br>maximun value : ".$max;
?>