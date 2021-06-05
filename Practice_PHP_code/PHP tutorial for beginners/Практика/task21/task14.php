<html>
	<head>
		<meta charset="utf-8">
        <title>PHP</title>
    </head>
	<body>

    </body>
</html>

<?php
    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 11];
    $sum = 0;
    
    foreach($arr as $elem) {
        $sum += $elem * $elem;
    }

    echo floor(sqrt($sum));
?>