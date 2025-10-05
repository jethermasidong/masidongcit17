<?php
    $math = 85;
    $english = 80;
    $science = 82;

    $average = ($math + $english + $science) / 3;

    if ($average >= 90) {
        $grade = "A";
    } elseif ($average >= 80) {
        $grade = "B";
    } elseif ($average >= 70) {
        $grade = "C";
    } elseif ($average >= 60) {
        $grade = "D";
    } else {
        $grade = "F";
    }
    echo "<h1>Simple Grading System</h1>";
    echo "Math: $math<br>";
    echo "English: $english<br>";
    echo "Science: $science<br>";
    echo "Average Score: $average<br>";
    echo "Grade: $grade<br>";
?>
