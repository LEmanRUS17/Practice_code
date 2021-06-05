<html>
	<head>
		<meta charset="utf-8">
        <title>PHP</title>
    </head>
	<body>

    </body>
</html>

<?php
    $arr = [
		0=>['name'=>'Коля', 'salary'=>300],
		1=>['name'=>'Вася', 'salary'=>400],
		2=>['name'=>'Петя', 'salary'=>500],
	];

    foreach($arr as $elem) {
        echo $elem['name'].' - '.$elem['salary'].'<br>';
    }
?>