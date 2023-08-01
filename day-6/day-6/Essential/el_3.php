<?php

    echo "A. Print current date and time.<br>";
    $date_array = getdate();
    foreach($date_array as $key => $value)
    {
        echo "$key->$value<br>";
    }

    echo "<br>B. print current year, month and day of the month.<br>";
    echo "Today is: ".$date_array['year']."/".$date_array['mon']."/".$date_array['mday']."<br>";

    echo "<br>C. Display current hour, minustes and seconds of the time.<br>";
    echo "Today time is: ".date("h:i:s a")."<br>";

    echo "<br>D. Create a user defined function using mktime().<br>";
    $d = mktime(11,40,51,6,9,2022);
    echo "created date is: ".date("d-m-Y h:i:s a",$d)."<br>";

    echo "<br>E. create a date from string using strtotime().<br>";
    $d = strtotime("10:30pm april 30 2022");
    echo "date is:".date("Y-m-d h:i:sa",$d);

?>