<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Swapping Variables using Form</title>
</head>
<body>
  <h1>Swapping Variables</h1>

  <form method="post" action="">
    <label for="a">Enter first number (a):</label><br>
    <input type="number" name="a" id="a" required><br><br>

    <label for="b">Enter second number (b):</label><br>
    <input type="number" name="b" id="b" required><br><br>

    <input type="submit" name="swap" value="Swap Values">
  </form>

  <?php
  if (isset($_POST['swap'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];

    echo "<h3>Before swapping:</h3>";
    echo "a = $a, b = $b<br>";

    $temp = $a;
    $a = $b;
    $b = $temp;

    echo "<h3>After swapping:</h3>";
    echo "a = $a, b = $b";
  }
  ?>
</body>
</html>
