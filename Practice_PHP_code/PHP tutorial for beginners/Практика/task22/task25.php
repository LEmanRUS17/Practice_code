<html>
	<head>
		<meta charset="utf-8">
        <title>PHP</title>
    </head>
	<body>
        <p></p>
        <form action="" method="GET">
            <input type="text" name="num1">
            <br>
            <input type="text" name="num2">
            <br>
            <input type="submit">
        </form>
    </body>
</html>

<?php
    $num1 = $_REQUEST['num1'];
    $num2 = $_REQUEST['num2'];

    if($num1 > $num2) {
        $max = $num1;
    } else {
        $max = $num2;
    }

    for($i = 1; $i <= $max; $i++) {
        static $maxDivisor = 0;
        if($num1 % $i == 0 && $num2 % $i == 0) {
            $maxDivisor = $i;
        }
    }

    echo $maxDivisor;
?>
