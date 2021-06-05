<html>
	<head>
        <meta http-equiv="Content-Type" content="text/html; charset="utf-8">
        <title>Главная</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form action="" method="GET">
            <input type="text" name="city">
            <input type="submit">
        </form>

        <?php
            //Если форма была отправлена и город не пустой:
            if (!empty($_REQUEST['city'])) { // Проверка, пустое поле формы или нет
                $city = $_REQUEST['city']; // Присваивание значение переменной
                echo 'Ваш город: '.$city; // Вывод переменной на экран
            }
        ?>
    </body>
</html>