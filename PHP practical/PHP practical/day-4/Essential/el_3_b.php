<?php

    $a = 10;
    $b = 20;
    $c = 30;
    $d = 40;

    $exp1 = $a ^ 2 + $b * $c / 4;
    $exp2 = $a * ($b + $c) * ($c - $d) + 2;
    $exp3 = $a * $b - $c + 2 / 1;

    echo "Expression 1: ".$exp1."<br>";
    echo "Expression 2: ".$exp2."<br>";
    echo "Expression 3: ".$exp3."<br>";

?>