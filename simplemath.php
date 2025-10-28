<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Math Calculator</title>
</head>
<body>
    <h1>Simple Math Calculator</h1>

<form action="" method="POST">
  Enter first number: <input type="text" name="a"><br>
  Enter second number: <input type="text" name="b"><br>
  <input type="submit" value="Calculate">
  <button type="button" onclick="window.location.href='index.php'">Go Back</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $a = floatval($_POST['a']);
  $b = floatval($_POST['b']);

  $sum = $a + $b;
  $difference = $a - $b;
  $product = $a * $b;
  $quotient = $b != 0 ? $a / $b : "Undefined (division by zero)";

  echo "<h2>Results</h2>";
  echo "First Number: $a<br>";
  echo "Second Number: $b<br><br>";
  echo "Sum: $sum<br>";
  echo "Difference: $difference<br>";
  echo "Product: $product<br>";
  echo "Quotient: $quotient<br>";
}
?>

</body>
</html>
