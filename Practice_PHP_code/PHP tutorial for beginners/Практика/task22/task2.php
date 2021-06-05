<html>
	<head>
		<meta charset="utf-8">
        <title>PHP</title>
    </head>
	<body>
        <form action="" method="GET">
            <input type="text" name="year">
            <input type="submit">
        </form>
    </body>
</html>

<?php
    $year = $_REQUEST['year'];
    $date = date('d', mktime(0, 0, 0, 3, 0, $year)).'<br>';

    if($date == 29) {
        echo 'Год високосный';
    } elseif($date == 28) {
        echo 'Год не високосный';
    }
?>