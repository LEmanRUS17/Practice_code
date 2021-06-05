<html>
	<head>
		<meta charset="utf-8">
        <title>PHP</title>
    </head>
	<body>

    </body>
</html>

<?php
    $sum = 0;
    for($i = 1; $i <= 100; $i++) {
        if($i % 7 == 0) {
            $sum += $i;
        }
    }
    echo $sum;
?>