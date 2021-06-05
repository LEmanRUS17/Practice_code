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
            if (isset($_REQUEST['city'])) { // Проверка, пустое поле формы или нет
                $city = strip_tags($_REQUEST['city']); // Присваивание значение переменной, если в форме были теги то они удаляются
                echo 'Ваш город: '.$city; // Вывод переменной на экран
            }
        ?>
    </body>
</html>