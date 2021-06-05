<html>
	<head>
		<meta charset="utf-8">
        <title>PHP</title>
    </head>
	<body>
        <p></p>
        <form action="" method="GET">
            <input type="text" name="text">
            <br>
            <input type="submit">
        </form>
    </body>
</html>

<?php
    require_once 'Transliteration.php';

    $transliteration = new Transliteration;

    echo $transliteration->conversionToCyrillic($_REQUEST['text']);
?>