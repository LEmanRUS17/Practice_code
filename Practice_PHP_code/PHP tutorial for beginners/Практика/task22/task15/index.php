<html>
	<head>
		<meta charset="utf-8">
        <title>PHP</title>
    </head>
	<body>
        <p></p>
        <form action="" method="GET">
            <input type="text" name="text"><br>
            <input type="radio" name="tongue" value='Ru' checked='checked'>Ru<br>
            <input type="radio" name="tongue" value='En'>En<br>
            <br>
            <input type="submit">
        </form>
    </body>
</html>

<?php
    require_once 'Transliteration.php';

    $transliteration = new Transliteration;

    if($_REQUEST['tongue'] == 'En') {
        echo $transliteration->convertToTransliteration($_REQUEST['text']);
    } else {
        echo $transliteration->convertFromTransliteration($_REQUEST['text']);
    }
    
?>