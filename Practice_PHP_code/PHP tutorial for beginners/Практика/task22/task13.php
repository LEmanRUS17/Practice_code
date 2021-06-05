<html>
	<head>
		<meta charset="utf-8">
        <title>PHP</title>
    </head>
	<body>
        <p></p>
        <form action="" method="GET">
            <textarea name="text"></textarea>
            <br>
            <input type="submit">
        </form>
    </body>
</html>

<?php
    $arrayWords = explode(' ', $_REQUEST['text']);

    $arrayHeaders = [];
    foreach ($arrayWords as $elem) {
        $num = substr($elem, 0, 1);
        $arrayHeaders[] = $num;
    }
    $arrayHeaders = array_unique($arrayHeaders);

    foreach($arrayHeaders as $header) {
        echo 'Слова на букву '.$header.':<br>';
        foreach($arrayWords as $word) {
            if($header == substr($word, 0, 1)) {
                echo $word.'<br>';
            }
        }
    }
?>