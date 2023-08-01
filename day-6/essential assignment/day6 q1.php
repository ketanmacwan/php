<?php
	$col = "L j Institute of computer application";
	echo $col."<br><br><br>"; 
	echo "a. Find out length of the col.<br>";
	echo "length of string: ".strlen($col)."<br><br>";

	echo "b. Convert col into upper and lower case.<br>";
	echo "uppercase: ".strtoupper($col)."<br>";
	echo "lowercase: ".strtolower($col)."<br>";

	echo "c. Find out the index value of first appearance of “i” in col using case and 
non-case sensitive. (stripos(),stristr())";
	echo "first occurance(case-sensitive) of 'i' is at position: ".strpos($col, 'i')."<br>";


?>