<html>
	<head>
		<meta charset="utf-8">
        <title>PHP</title>
    </head>
	<body>
        <form action="" method="GET">
            <p>Сколько вам лет?</p>
            <p><input name="age" type="radio" value="1">менее 20 лет</p>
            <p><input name="age" type="radio" value="2">20-25</p>
            <p><input name="age" type="radio" value="3">26-30</p>
            <p><input name="age" type="radio" value="4">более 30</p>
            <input type="submit">
        </form>
    </body>
</html>

<?php
    if(isset($_REQUEST['age'])) {
        switch($_REQUEST['age']) {
            case '1':
                echo 'Вам менее 20 лет';
            break;
            case '2':
                echo 'Вам 20-25 лет';
            break;
            case '3':
                echo 'Вам 26-30 лет';
            break;
            case '4':
                echo 'Вам более 30';
            break;
        }
    }
?>