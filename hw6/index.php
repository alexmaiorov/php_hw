<?php
$x = ($_GET['x']) ? (int)($_GET['x']) : 0;
$y = ($_GET['y']) ? (int)($_GET['y']) : 0;
if ($_GET['operation']) {
    switch ($_GET['operation']) {
        case '+':
			$res = $x + $y;
			break;
		case '-':
			$res = $x - $y;
			break;
		case '*':
			$res = $x * $y;
			break;
        case '/':
            $res = ($y != 0) ? $x / $y : 'Делить на ноль нельзя';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calc</title>
</head>
<body>
    <form action="#" method="get">
		<input type="number" name="x" value = "<?=$x?>">
		<input type="number" name="y" value = "<?=$y?>">
		<input type="submit" name="operation" value="+">
		<input type="submit" name="operation" value="-">
		<input type="submit" name="operation" value="*">
		<input type="submit" name="operation" value="/">
	</form>

	<span>Результат: <? echo $res; ?></span>
</body>
</html>