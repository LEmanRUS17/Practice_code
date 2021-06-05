<html>
	<head>
		<meta charset="utf-8">
        <title>PHP</title>
    </head>
	<body>

    </body>
</html>

<?php
    echo removeEvenCharacters('qwertyuiop');

    function removeEvenCharacters($str) {
        $arr = str_split($str);
        $result = '';

        for($i = 0; $i < count($arr); $i += 2) {
            $result .= $arr[$i];
        }

        return $result;
    }
?>