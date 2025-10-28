<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Travel Cost Estimator</title>
</head>
<body>
  <h1>Travel Cost Estimator</h1>

  <form method="post" action="">
    Distance (km): <input type="number" name="distance" step="0.1" required><br><br>
    Fuel Consumption (km per liter): <input type="number" name="fuel_consumption" step="0.1" required><br><br>
    Fuel Price (PHP per liter): <input type="number" name="fuel_price" step="0.01" required><br><br>
    <input type="submit" name="calculate" value="Calculate Cost">
  </form>

  <?php
  if (isset($_POST['calculate'])) {
    $distance = $_POST['distance'];
    $fuel_consumption = $_POST['fuel_consumption'];
    $fuel_price = $_POST['fuel_price'];

    $fuel_needed = $distance / $fuel_consumption;
    $travel_cost = $fuel_needed * $fuel_price;

    echo "<h3>Results:</h3>";
    echo "Distance: $distance km<br>";
    echo "Fuel Consumption: $fuel_consumption km/l<br>";
    echo "Fuel Price: PHP $fuel_price per liter<br>";
    echo "<strong>Estimated Travel Cost: PHP " . number_format($travel_cost, 2) . "</strong>";
  }
  ?>
</body>
</html>
