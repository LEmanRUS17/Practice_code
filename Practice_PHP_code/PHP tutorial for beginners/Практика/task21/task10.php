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
    for($i = 1; $i <= 10; $i++) {
        $arr[] = rand(1, 10);
    }
    var_dump($arr);
?>