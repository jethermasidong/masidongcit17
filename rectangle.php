<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Area and Perimeter of a Rectangle</title>
</head>
<body>
  <h1>Area and Perimeter of a Rectangle</h1>

  <form method="post" action="">
    Length: <input type="number" name="length" step="0.1" required><br><br>
    Width: <input type="number" name="width" step="0.1" required><br><br>
    <input type="submit" name="calculate" value="Calculate">
    <button type="button" onclick="window.location.href='index.php'">Go Back</button>
  </form>

  <?php
  if (isset($_POST['calculate'])) {
    $length = $_POST['length'];
    $width = $_POST['width'];

    $area = $length * $width;
    $perimeter = 2 * ($length + $width);

    echo "<h3>Results:</h3>";
    echo "Length: $length<br>";
    echo "Width: $width<br>";
    echo "Area: $area<br>";
    echo "Perimeter: $perimeter<br>";
  }
  ?>
</body>
</html>
