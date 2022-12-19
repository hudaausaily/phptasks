<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="sg3.php">
  <label>First operand:</label><br>
  <input type="text" name="operand1"><br>
  <label>Second operand:</label><br>
  <input type="text" name="operand2"><br>
  <label>Operation:</label><br>
  <select name="operation">
    <option value="add">+</option>
    <option value="subtract">-</option>
    <option value="multiply">*</option>
    <option value="divide">/</option>
  </select><br>
  <input type="submit" value="Calculate">
</form> 

</body>
</html>

<?php



$operand1 = $_POST['operand1'];
$operand2 = $_POST['operand2'];
$operation = $_POST['operation'];


switch ($operation) {
    case 'add':
      $result = $operand1 + $operand2;
      break;
    case 'subtract':
      $result = $operand1 - $operand2;
      break;
    case 'multiply':
      $result = $operand1 * $operand2;
      break;
    case 'divide':
      $result = $operand1 / $operand2;
      break;
  }

  echo "Result: $result";
