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

    for($i = 1; $i <= 15; $i++) {
        $sum += sqrt($i);
    }

    echo round($sum, 2);
?>