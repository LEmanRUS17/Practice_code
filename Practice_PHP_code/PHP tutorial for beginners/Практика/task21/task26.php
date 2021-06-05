<html>
	<head>
		<meta charset="utf-8">
        <title>PHP</title>
    </head>
	<body>

    </body>
</html>

<?php
    $str = 'xxxxxx';

    for($i = 0; $i <= strlen($str); $i++) {
        echo substr($str, $i).'<br>';
    }
?>