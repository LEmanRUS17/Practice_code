<html>
	<head>
		<meta charset="utf-8">
        <title>PHP</title>
    </head>
	<body>
        <p></p>
        <form action="" method="GET">
            <input type="text" name="a" value=2>
            <br>
            <input type="text" name="b" value=20>
            <br>
            <input type="text" name="c" value=20>
            <br>
            <input type="submit">
        </form>
    </body>
</html>

<?php
    $numA = $_REQUEST['a'];
    $numB = $_REQUEST['b'];
    $numC = $_REQUEST['c'];

    echo 'Решение:'.'<br>';

    $d = pow($numB, 2) - 4 * $numA * $numC;

    if($d > 0) {
        $x1 = (-($numB) - sqrt($d)) / (2 * $numA);
        echo 'x1 = '.$x1.'<br>';
        $x2 = (-($numB) + sqrt($d)) / (2 * $numA);
        echo 'x1 = '.$x2.'<br>'; 
    } elseif($d == 0) {
        $x = -($numB) / (2 * $numA);
        echo 'x1 = x2 = '.$x.'<br>';
    } else {
        echo 'Так как дискриминант меньше нуля, то уравнение не имеет действительных решений.';
    }
    
?>
