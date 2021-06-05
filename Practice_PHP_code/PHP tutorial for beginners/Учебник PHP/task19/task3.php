<html>
	<head>
		<meta charset="utf-8">
        <title>PHP</title>
    </head>
	<body>
        <form action="" method="GET">
            <p>Знаете ли вы PHP</p>
            <p><input name="PHP" type="radio" value="Yes">Да</p>
            <p><input name="PHP" type="radio" value="No" checked>Нет</p>
            <input type="submit">
        </form>
    </body>
</html>

<?php
    if(isset($_REQUEST['php']) and $_REQUEST['PHP'] == 'Yes') {
        echo 'Yes';
    } else {
        echo 'No';
    }
?>