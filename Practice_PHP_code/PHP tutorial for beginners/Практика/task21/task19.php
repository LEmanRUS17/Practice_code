<html>
	<head>
		<meta charset="utf-8">
        <title>PHP</title>
    </head>
	<body>

    </body>
</html>

<?php
    $arr = [];

    for($i = 0; $i < 10; $i++) {
        for($j = 0; $j < 10; $j++) {
            $arr[$i][] = rand(1, 10);
        }
    }

    var_dump($arr);
?>