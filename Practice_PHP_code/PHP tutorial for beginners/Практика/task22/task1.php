<html>
	<head>
		<meta charset="utf-8">
        <title>PHP</title>
    </head>
	<body>

    </body>
</html>

<?php
    $date        = mktime(0, 0, 0, 12, 31);               // Дата нового года
    $currentDate = mktime(0, 0, 0);                       // Текущая дата
    $result      = ($date - $currentDate) / 60 / 60 / 24; // Сколько дней осталось
	echo $result;
?>