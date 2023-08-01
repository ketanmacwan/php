<?php

    $col = " L J Institute of Computer Application ";

    echo "<b>A)Find length of the string</b><br>";
    echo strlen($col)."<br><br>";

    echo "<b>B)Covert string to upper and lower case.</b><br>";
    echo strtoupper($col)."<br>";
    echo strtolower($col)."<br><br>";

    echo "<b>C)find index of first appearance of 'I'.</b><br>";
    echo stripos($col,"i")."<br>";
    echo  stristr($col,"i")."<br><br>";

    echo "<b>D)find index of last appearance of 'I'.</b><br>";
    echo strripos($col,"i")."<br>";
    echo strrpos($col,"i")."<br><br>";

    echo "<b>E)Compare the string.</b><br>";
    echo strncmp($col," L J Institute of Computer Application ",strlen($col))."<br>";
    echo strncasecmp($col," L J Institute of Computer Application ",strlen($col))."<br><br>";

    echo "<b>F)Reverse the string.</b><br>";
    echo strrev($col)."<br><br>";

    echo "<b>G)Find the substr of string.</b><br>";
    echo substr($col,1,30)."<br><br>";

    echo "<b>H)Remove left,right and all space from string.</b><br>";
    echo trim($col)."<br><br>";

    echo "<b>I)Replace <q>Institute</q> with <q>Institutes</q> in a string.</b><br>";
    echo str_replace($col,"Institute","Institutes")."<br><br>";

    echo "<b>J)Count words of string.</b><br>";
    echo str_word_count($col)."<br><br>";

?>