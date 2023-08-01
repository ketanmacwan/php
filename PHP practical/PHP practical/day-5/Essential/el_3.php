<?php

   $salary = 10000;
   $days = 3;

   calNetSalary($salary,$days);

   function calNetSalary($salary,$days){

      if($days <= 3){
         $netsalary = $salary - 50 * $days;
         echo "Salary: $salary<br>";
         echo "Days: $days<br>";
         echo "NetSalary: $netsalary<br>";
        }
        else if($days > 3 && $days <7){
         $netsalary = $salary - 75 * $days;
         echo "Salary: $salary<br>";
         echo "Days: $days<br>";
         echo "NetSalary: $netsalary<br>";
        }
        else{
         $netsalary = $salary - 100 * $days;
         echo "Salary: $salary<br>";
         echo "Days: $days<br>";
         echo "NetSalary: $netsalary<br>";
        }

   }

   

   

?>