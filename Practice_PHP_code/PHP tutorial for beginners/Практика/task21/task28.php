<html>
	<head>
		<meta charset="utf-8">
        <title>PHP</title>
    </head>
	<body>

    </body>
</html>

<?php
	$arr = [1, 2, 3, 4, 5, 6];
	$newArr = [];
	$key = [];
    
	for ($i = 0; $i < count($arr); $i+= 2) {
		$key = $arr[$i];
		$newArr[$key] = $arr[$i + 1];
    }
    
	var_dump($newArr);
?>