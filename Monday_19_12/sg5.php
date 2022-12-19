<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body>
	<form method="post">
		<label>Enter first number:</label>
		<input type="text" name="num1"><br>

		<label>Enter second number:</label>
		<input type="text" name="num2"><br>

		<label>Select operation:</label>
		<input type="text" name="operation"><br>

		<input type="submit" value="Calculate">
	</form>

	<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		$operation = $_POST['operation'];

		if (is_numeric($num1) && is_numeric($num2)) {
			if ($operation == '+') {
				$result = $num1 + $num2;
			} elseif ($operation == '-') {
				$result = $num1 - $num2;
			} elseif ($operation == '*') {
				$result = $num1 * $num2;
			} elseif ($operation == '/') {
				$result = $num1 / $num2;
			}

			echo "Result: $result";
		} else {
			echo 'Error: please enter a valid number';
		}
	}
	?>
</body>
</html>