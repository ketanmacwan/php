<?php

    $n1 = 2;
    $n2 = 50;

    display_prime($n1,$n2);

    function display_prime($n1,$n2){
        for($i=$n1;$i<=$n2;$i++){
            if($i%2 != 0){
                echo "no: $i <br>";
            }
        }
    }

?>