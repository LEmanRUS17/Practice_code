<html>
	<head>
		<meta charset="utf-8">
        <title>PHP</title>
    </head>
	<body>

    </body>
</html>

<?php
    $arr = [1, 2, 3, 40, 5, 60, 7, 8, 11];
    $sum = 0;
    
    foreach($arr as $elem) {
        if($elem > 0 && $elem < 10)
            $sum += $elem;
    }

    echo $sum;
?>