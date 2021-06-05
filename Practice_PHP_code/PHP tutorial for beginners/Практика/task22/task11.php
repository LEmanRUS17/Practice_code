<html>
	<head>
		<meta charset="utf-8">
        <title>PHP</title>
    </head>
	<body>
        <p>Дан текстареа и кнопка. В текстареа вводится текст. По нажатию на кнопку нужно посчитать процентное содержание каждого символа в тексте.</p>
        <form action="" method="GET">
            <textarea name="text"></textarea><br>
            <input type="submit">
        </form>
    </body>
</html>

<?php
    $str = $_REQUEST['text'];

    $arr   = str_split($str); // масив строки
    $count = [];              // масив количества элементов по значению

	foreach ($arr as $elem) {
		if (!isset($count[$elem])) {
			$count[$elem] = 1;
		} else {
			$count[$elem]++;
		}
    }
    
    foreach ($count as $key=>$elem){
        $result = round(100 / (count($arr) / $elem), 2);
        echo $key.' = '.$result.'% ;<br>';
    }
?>