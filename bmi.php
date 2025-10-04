<?php
    $weight = 70; 
    $height = 1.75; 

    $bmi = $weight / ($height * $height);

    echo "<h1>BMI Calculator</h1>";
    echo "Weight: $weight<br>";
    echo "Height: $height<br>";
    echo "<strong>BMI: $bmi<br></strong>";
?>
