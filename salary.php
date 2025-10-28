<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Salary Calculator</title>
</head>
<body>
  <h1>Salary Calculator</h1>

  <form method="post" action="">
    Basic Salary: <input type="number" name="basic_salary" required><br><br>
    Allowance: <input type="number" name="allowance" required><br><br>
    Deduction: <input type="number" name="deduction" required><br><br>
    <input type="submit" name="calculate" value="Calculate Salary">
    <button type="button" onclick="window.location.href='index.php'">Go Back</button>
  </form>

  <?php
  if (isset($_POST['calculate'])) {
    $basic_salary = $_POST['basic_salary'];
    $allowance = $_POST['allowance'];
    $deduction = $_POST['deduction'];

    $net_salary = $basic_salary + $allowance - $deduction;

    echo "<h3>Salary Details:</h3>";
    echo "Basic Salary: $basic_salary<br>";
    echo "Allowance: $allowance<br>";
    echo "Deduction: $deduction<br>";
    echo "<strong>Net Salary: $net_salary</strong>";
  }
  ?>
</body>
</html>
