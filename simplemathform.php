<?php
    $a = $_POST['number1'];
    $b = $_POST['number2'];

    $sum = $a + $b;
    $difference = $a - $b;
    $product = $a * $b;
    $quotient = $a / $b;
    echo "<h1>Simple Math</h1>";
    echo "<p> Sum of $a and $b is <strong> $sum </strong><br></p>";
    echo "<p> Difference of $a and $b is <strong> $difference </strong><br></p>";
    echo "<p> Product of $a and $b is <strong> $product </strong><br></p>";
    echo "<p> Quotient of $a and $b is <strong>$quotient </strong><br></p>";
?>