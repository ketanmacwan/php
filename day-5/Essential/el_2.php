<?php

$salary = 50000;

if($salary >=5000 && $salary <10000)
{
    $bonus = $salary * 10 / 100;
    $netsalary = $salary - $bonus;
    echo "Salary: $salary<br>";
    echo "Bonus: $bonus<br>";
    echo "NetSalary: $netsalary<br>";
}
else if($salary >= 10000 && $salary < 50000)
{
    $bonus = $salary * 7.5 / 100;
    $netsalary = $salary - $bonus;
    echo "Salary: $salary<br>";
    echo "Bonus: $bonus<br>";
    echo "NetSalary: $netsalary<br>";
}
else if($salary >= 50000 && $salary < 100000)
{
    $bonus = $salary * 5 / 100;
    $netsalary = $salary - $bonus;
    echo "Salary: $salary<br>";
    echo "Bonus: $bonus<br>";
    echo "NetSalary: $netsalary<br>";
}
else{
    $bonus = $salary * 2 / 100;
    $netsalary = $salary - $bonus;
    echo "Salary: $salary<br>";
    echo "Bonus: $bonus<br>";
    echo "NetSalary: $netsalary<br>";
}

?>