<html>
	<head>
		<meta charset="utf-8">
        <title>PHP</title>
    </head>
	<body>

    </body>
</html>

<?php
    $num = 10;
    $str = '';

    for($i = 1; $i <= $num; $i++) {
        for($j = 1; $j <= $i; $j++) {
            $str .= $i;
        }
    }

    echo $str;
?>