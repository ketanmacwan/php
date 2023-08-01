<?php

    $no = 11;
    $flag = 0;
    $res = find_prime_no($no);

    if($res == 0){
        echo "$no is a prime number";
    }
    else{
        echo "$no is not a prime number";
    }

    function find_prime_no($n){
        global $flag;
        for($i=2;$i<=$n/2;$i++){
            if($n%$i == 0){
                $flag = 1;
            }
        }
        return $flag;

    }

?>