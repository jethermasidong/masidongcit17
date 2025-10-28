<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Introduce Yourself</title>
</head>
<body>
  <h1>Introduce Yourself</h1>

  <form method="POST" action="">
    Name: <input type="text" name="name" required><br><br>
    Age: <input type="number" name="age" required><br><br>
    Favorite Color: <input type="text" name="color" required><br><br>
    <input type="submit" value="Submit">
    <button type="button" onclick="window.location.href='index.php'">Go Back</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = $_POST['name'];
      $age = $_POST['age'];
      $color = $_POST['color'];

      echo "<h2>Hi, I'm $name, I am $age years old, and my favorite color is $color.</h2>";

  }
  ?>

</body>
</html>
