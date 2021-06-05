<html>
	<head>
        <meta http-equiv="Content-Type" content="text/html; charset="utf-8">
        <title>Главная</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
            if(empty($_REQUEST['name']) && empty($_REQUEST['age']) && empty($_REQUEST['text'])) {
        ?>
        <form action="" method="GET">
            Введите имя:
            <input type="text" name="name"><br><br>
            Введите возраст:
            <input type="text" name="age"><br><br>
            Введите сообщение:
            <input tipy="textarea" name="text"><br><br>
            <input type="submit">
        </form>

        <?php
            }
        ?>

        <?php
            if(!empty($_REQUEST['name']) && !empty($_REQUEST['age']) && !empty($_REQUEST['text'])) {
                $name = strip_tags($_REQUEST['name']);
                $age = strip_tags($_REQUEST['age']);
                $text = strip_tags($_REQUEST['text']);
                echo 'Привет, '.$name.', '.$age.' лет.'."\n";
                echo 'Твое сообщение: '.$text;
            }
        ?>
    </body>
</html>