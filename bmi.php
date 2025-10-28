<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BMI Calculator</title>
</head>
<body>
  <h1>BMI Calculator</h1>

  <form method="post" action="">
    Weight (kg): <input type="number" name="weight" step="0.1" required><br><br>
    Height (m): <input type="number" name="height" step="0.01" required><br><br>
    <input type="submit" name="calculate" value="Calculate BMI">
  </form>

  <?php
  if (isset($_POST['calculate'])) {
    $weight = $_POST['weight'];
    $height = $_POST['height'];

    $bmi = $weight / ($height * $height);

    echo "<h3>Results:</h3>";
    echo "Weight: $weight kg<br>";
    echo "Height: $height m<br>";
    echo "<strong>BMI: " . round($bmi, 2) . "</strong>";
  }
  ?>
</body>
</html>
