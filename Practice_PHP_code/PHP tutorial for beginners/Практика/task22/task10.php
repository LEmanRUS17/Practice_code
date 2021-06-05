<html>
	<head>
		<meta charset="utf-8">
        <title>PHP</title>
    </head>
	<body>
        <form action="" method="GET">
            <textarea name="text"></textarea><br>
            <input type="submit">
        </form>
    </body>
</html>

<?php
    $str = $_REQUEST['text'];

    echo 'Количество слов: '                        .count(explode(' ', preg_replace("/\s+/", " ", $str))).'<br>';
    echo 'Количество символов: '                    .count(str_split($str)).'<br>';
    echo 'Количество символов за вычитом пробелов: '.count(str_split(preg_replace("/\s*/", "", $str)));
?>