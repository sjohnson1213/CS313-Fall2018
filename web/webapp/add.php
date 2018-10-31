<?php
session_start();
?>

<html>
<body>
<h1>Enter Budget Information:</h1>
<form action="budgetaddconfirm.php" method="POST">
  <label for="income"><b>Income</b></label>
  <input type="text" placeholder="Enter Income" name="income"><br><br>

  <label for="category"><b>Category</b></label>
  <input type="text" placeholder="Enter Category" name="lastname"><br><br>

  <label for="expected_expense"><b>Expected Expense</b></label>
  <input type="text" placeholder="Enter Expected Expense" name="lastname"><br><br>

  <button type="submit">Add Budget Item</button>
</form><br><br>

<h1>Enter Transaction Information:</h1>
<form action="transactions.php" method="POST">
  <label for="amount"><b>Amount</b></label>
  <input type="text" placeholder="Enter Amount" name="amount"><br><br>

  <label for="date"><b>Date</b></label>
  <input type="text" placeholder="Enter Date" name="date"><br><br>

  <label for="category"><b>Category</b></label>
  <input type="text" placeholder="Enter Category" name="category"><br><br>

  <label for="merchant"><b>Merchant</b></label>
  <input type="text" placeholder="Enter Merchant" name="merchant"><br><br>

  <label for="note"><b>Note</b></label>
  <input type="text" placeholder="Enter Note" name="note"><br><br>

  <button type="submit">Add Transaction</button>
</form> 
</body>
</html>