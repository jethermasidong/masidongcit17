<?php
$a = 10;
$b = 25;

echo "<h1>Swapping Variables</h1>";
echo "Before swapping:<br>";
echo "a = $a, b = $b<br>";

$temp = $a;
$a = $b;
$b = $temp;

echo "<br>After swapping:<br>";
echo "a = $a, b = $b";
?>