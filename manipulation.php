<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>String Manipulation</title>
</head>
<body>
  <h1>String Manipulation</h1>

  <form method="post" action="">
    Enter a sentence:<br>
    <input type="text" name="sentence" size="50" required><br><br>
    <input type="submit" name="process" value="Submit">
  </form>

  <?php
  if (isset($_POST['process'])) {
    $sentence = $_POST['sentence'];

    echo "<h3>Results:</h3>";
    echo "Original Sentence: $sentence<br>";
    echo "Number of characters: " . strlen($sentence) . "<br>";
    echo "Number of words: " . str_word_count($sentence) . "<br>";
    echo "Uppercase: " . strtoupper($sentence) . "<br>";
    echo "Lowercase: " . strtolower($sentence) . "<br>";
  }
  ?>
</body>
</html>
