<html>
	<head>
		<meta charset="utf-8">
        <title>PHP</title>
    </head>
	<body>

    </body>
</html>

<?php
    echo analogStrrev('qwertyuiop');

    function analogStrrev($str) {
        $arr = [];
        $result = [];

        $arr = str_split($str);
        for($i = count($arr) - 1; $i >= 0; $i--) {
            $result[] = $arr[$i];
        }

        return implode($result);
    }
?>