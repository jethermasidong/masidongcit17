<?php
    
    $distance = 200; 
    $fuel_consumption = 25; 
    $fuel_price = 60; 

    $fuel_needed = $distance / $fuel_consumption;
    $travel_cost = $fuel_needed * $fuel_price;

    echo "<h1>Travel Cost Estimator</h1>";
    echo "Distance: $distance <br>";
    echo "Fuel Consumption: $fuel_consumption <br>";
    echo "Fuel Price: $fuel_price <br>";
    echo "<strong>Estimated Travel Cost: PHP $travel_cost<br></strong>";
?>
