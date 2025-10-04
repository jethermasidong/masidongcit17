<?php
    $php_amount = 1200;
    $usd_rate = 57.89; 
    $eur_rate = 67.97; 
    $jpy_rate = 0.39; 

    $usd = $php_amount / $usd_rate;
    $eur = $php_amount / $eur_rate;
    $jpy = $php_amount / $jpy_rate;

    echo "<h1> Currency Converter:";
    echo "<h2> PHP: $php_amount pesos<br></h2>";
    echo "US Dollar: " . number_format($usd, 2) . " USD<br>";
    echo "Euro: " . number_format($eur, 2) . " EUR<br>";
    echo "Japan Yen: " . number_format($jpy, 2) . " JPY<br>";
?>
