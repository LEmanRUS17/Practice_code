<html>
	<head>
        <meta http-equiv="Content-Type" content="text/html; charset="utf-8">
        <title>Главная</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
        	//Все примеры показаны для даты 01.06.2013 в 12.23.59, понедельник

            echo date('Y')."|\n"; //вернет '2013'

            echo date('y')."|\n"; //вернет '13'

            echo date('m')."|\n"; //вернет '06' - номер месяца

            echo date('d')."|\n"; //вернет '01' - номер дня в месяце

            echo date('j')."|\n"; //вернет '1' - номер дня в месяце (без нуля спереди)

            echo date('w')."|\n"; //вернет '1' - понедельник

            echo date('H')."|\n"; //вернет '12' - часы

            echo date('i')."|\n"; //вернет '23' - минуты

            echo date('s')."|\n"; //вернет '59' - секунды

            echo date('d-m-Y')."|\n"; //вернет '01-06-2013'

            echo date('d.m.Y')."|\n"; //вернет '01.06.2013'

            echo date('H:i:s d.m.Y')."|\n"; //вернет '12:23:59 01.06.2013'
        ?>
    </body>
</html>