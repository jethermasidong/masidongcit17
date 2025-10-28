<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Grading System</title>
</head>
<body>
  <h1>Simple Grading System</h1>

  <form method="post" action="">
    Math: <input type="number" name="math" required><br><br>
    English: <input type="number" name="english" required><br><br>
    Science: <input type="number" name="science" required><br><br>
    <input type="submit" name="compute" value="Compute Grade">
  </form>

  <?php
  if (isset($_POST['compute'])) {
    $math = $_POST['math'];
    $english = $_POST['english'];
    $science = $_POST['science'];

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

    echo "<h3>Results:</h3>";
    echo "Math: $math<br>";
    echo "English: $english<br>";
    echo "Science: $science<br>";
    echo "Average Score: " . round($average, 2) . "<br>";
    echo "<strong>Grade: $grade</strong>";
  }
  ?>
</body>
</html>
