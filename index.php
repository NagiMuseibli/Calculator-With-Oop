<?php

declare(strict_types=1);
include 'includes/class-autoload.inc.php';
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>

<body>

	<form action="includes/calc.inc.php" method="post">
		<p>My own calculator</p>
		<input type="number" name="num1" placeholder="First number">
		<select name="oper">
			<option value="add">Addition</option>
			<option value="sub">Subtraction</option>
			<option value="div">Division</option>
			<option value="mul">Multiplication</option>
		</select>
		<input type="number" name="num2" placeholder="Second number">
		<button type="submit" name="submit">Calculate</button>
	</form>
</body>

</html>