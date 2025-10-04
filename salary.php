<?php
    $basic_salary = 15000;
    $allowance = 4000;
    $deduction = 4000;

    $net_salary = $basic_salary + $allowance - $deduction;

    echo "<h1>Salary Calculator</h1>";
    echo "Basic Salary: $basic_salary<br>";
    echo "Allowance: $allowance<br>";
    echo "Deduction: $deduction<br>";
    echo "<strong>Net Salary: $net_salary<br></strong>";
?>
