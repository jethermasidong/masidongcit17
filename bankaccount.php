<?php
    $balance = 1000;
    $deposit = 500;
    $withdraw = 400;

    $deposit_transaction = $balance + $deposit;
    $withdraw_transaction = $deposit_transaction - $withdraw;

    echo "<h1>Bank Account Simulation</h1>";
    echo "Balance: $balance<br>";
    echo "Deposit: $deposit<br>";
    echo "Withdraw: $withdraw<br>";
    echo "<strong>Updated Balance: $withdraw_transaction<br><strong>";
?>
