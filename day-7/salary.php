<?php
   $salary = $_POST['sal_number'];
   $day = $_POST['day_number'];

  if($day <= 3){
         $netsalary = $salary - 50 * $day;
         echo "Salary: $salary<br>";
         echo "Day: $day<br>";
         echo "NetSalary: $netsalary<br>";
        }
        else if($day > 3 && $day <7){
         $netsalary = $salary - 75 * $day;
         echo "Salary: $salary<br>";
         echo "Day: $days<br>";
         echo "NetSalary: $netsalary<br>";
        }
        else{
         $netsalary = $salary - 100 * $day;
         echo "Salary: $salary<br>";
         echo "Day: $day<br>";
         echo "NetSalary: $netsalary<br>";
   }
?>
