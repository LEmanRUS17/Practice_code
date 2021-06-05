<html>
	<head>
		<meta charset="utf-8">
        <title>PHP</title>
    </head>
	<body>

    </body>
</html>

<?php
    $str = '';

    for($i = 1; $i <= 6; $i++) {
        $str .= rand(1, 9);
    }
    
    echo $str;
?>