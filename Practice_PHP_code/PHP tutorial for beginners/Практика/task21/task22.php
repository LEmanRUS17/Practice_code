<html>
	<head>
		<meta charset="utf-8">
        <title>PHP</title>
    </head>
	<body>

    </body>
</html>

<?php
    echo analogStrlen('qwertyuiop');

    function analogStrlen($str) {
        $arr = str_split($str);
        $num = 0;

        foreach($arr as $elem) {
            $num++;
        }

        return $num;
    }
?>