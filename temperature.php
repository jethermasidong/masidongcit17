<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Temperature Converter</title>
</head>
<body>
  <h1>Temperature Converter</h1>

  <form method="post" action="">
    <label for="celsius">Enter temperature in Celsius:</label><br>
    <input type="number" name="celsius" id="celsius" step="0.1" required><br><br>

    <input type="submit" name="convert" value="Convert to Fahrenheit">
  </form>

  <?php
  if (isset($_POST['convert'])) {
    $celsius = $_POST['celsius'];
    $fahrenheit = ($celsius * 9/5) + 32;

    echo "<h3>Conversion Result:</h3>";
    echo "$celsius &deg;C is equal to $fahrenheit &deg;F";
  }
  ?>
</body>
</html>
