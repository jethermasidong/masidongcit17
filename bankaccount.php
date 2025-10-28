<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bank Account Simulation</title>
</head>
<body>
  <h1>Bank Account Simulation</h1>

  <form method="post" action="">
    Current Balance: <input type="number" name="balance" required><br><br>
    Deposit Amount: <input type="number" name="deposit" required><br><br>
    Withdraw Amount: <input type="number" name="withdraw" required><br><br>
    <input type="submit" name="process" value="Submit">
  </form>

  <?php
  if (isset($_POST['process'])) {
    $balance = $_POST['balance'];
    $deposit = $_POST['deposit'];
    $withdraw = $_POST['withdraw'];

    $deposit_transaction = $balance + $deposit;
    $withdraw_transaction = $deposit_transaction - $withdraw;

    echo "<h3>Transaction Summary:</h3>";
    echo "Balance: $balance<br>";
    echo "Deposit: $deposit<br>";
    echo "Withdraw: $withdraw<br>";
    echo "<strong>Updated Balance: $withdraw_transaction</strong>";
  }
  ?>
</body>
</html>
