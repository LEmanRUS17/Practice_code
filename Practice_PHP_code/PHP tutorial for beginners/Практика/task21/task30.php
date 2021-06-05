<html>
	<head>
		<meta charset="utf-8">
        <title>PHP</title>
    </head>
	<body>

    </body>
</html>

<?php
    echo swap('12345678');

    function swap($str) {
        $newStr = array_reverse(str_split(strrev($str), 2));
        return implode('', $newStr);
    }
?>