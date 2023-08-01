<?php
	$a = 100;
	$b = 100;
	$c = 100;

	if ($a>$b && $a>$c) {
		echo $a." a number is maximum ".$b." b number is minimum ".$c." c number is minimum";
	}
    else if($b>$a && $b>$c)
	{
		echo $b." b number is maximun ".$a." a number is minimum ".$c." c number is minimum";
	}
	else if ($c>$a && $c>$b) {
		echo $c." c number is maximun ".$a." a number is minimum ".$b." b number is minimum";
	}
	else {
		echo "borth are same";
	}
?>