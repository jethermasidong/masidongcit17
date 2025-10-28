<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Currency Converter</title>
</head>
<body>
  <h1>Currency Converter</h1>

  <form method="post" action="">
    Enter amount in PHP: 
    <input type="number" name="php_amount" step="0.01" required><br><br>
    <input type="submit" name="convert" value="Convert">
  </form>

  <?php
  if (isset($_POST['convert'])) {
    $php_amount = $_POST['php_amount'];

    $usd_rate = 57.89; 
    $eur_rate = 67.97; 
    $jpy_rate = 0.39; 

    $usd = $php_amount / $usd_rate;
    $eur = $php_amount / $eur_rate;
    $jpy = $php_amount / $jpy_rate;

    echo "<h2>PHP: $php_amount pesos</h2>";
    echo "US Dollar: " . number_format($usd, 2) . " USD<br>";
    echo "Euro: " . number_format($eur, 2) . " EUR<br>";
    echo "Japanese Yen: " . number_format($jpy, 2) . " JPY<br>";
  }
  ?>
</body>
</html>
