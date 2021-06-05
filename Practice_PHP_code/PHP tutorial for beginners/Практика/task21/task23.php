<html>
	<head>
		<meta charset="utf-8">
        <title>PHP</title>
    </head>
	<body>

    </body>
</html>

<?php
    echo reversRegister('QwE');

    function reversRegister($str) {
        $arr = str_split($str);
        $str2 = '';
        foreach($arr as $elem) {
            if(ctype_upper($elem)) {
                $str2 .= strtolower($elem);
            } else {
                $str2 .= strtoupper($elem);
            }
        }

        return $str2;
    }
?>