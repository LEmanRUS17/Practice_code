<html>
	<head>
		<meta charset="utf-8">
        <title>PHP</title>
    </head>
	<body>

    </body>
</html>

<?php
    echo stringConversion('var_text_hello');

    function stringConversion($str) {
        $arr = explode('_', $str);
        $str2 = '';

        foreach($arr as $elem) {
            $str2 .= ucfirst($elem);
        }

        return lcfirst($str2);
    }
?>