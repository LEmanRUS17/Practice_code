<html>
	<head>
		<meta charset="utf-8">
        <title>PHP</title>
    </head>
	<body>

    </body>
</html>

<?php
    $arr = [1, 3, 2, 4];
    $result = [];

    foreach($arr as $elem) {
        for($i = 0; $i < $elem; $i++) {
            $result[] = $elem;
        }
    }

    var_dump($result);
?>