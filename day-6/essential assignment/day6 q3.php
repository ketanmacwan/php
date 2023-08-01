<?php
	echo 'a. Print current date and time.<br>';
	echo date("jS F Y h:i:s A");
	echo "<br><br>";

	echo "b. Display current year, month and day of the month.<br>";
	echo "today is :"; 
	echo date("Y F j");
	echo "<br><br>";

	echo "c. Display current hour, minutes and seconds of the time.<br>";
	echo date("h : i : s a");
	echo "<br><br>";

	 echo "<br>d. Create a user defined function using mktime().<br>";
    $d = mktime(11,40,51,6,9,2022);
    echo "created date is: ".date("d-m-Y h:i:s a",$d)."<br>";
    echo "<br><br>";

    echo "e. Create a date from string using strtotime().<br>";
    $d = strtotime("10:30pm april 09 2022");
    echo "date is:".date("Y-m-d h:i:sa",$d);

?>