<html>
	<head>
        <meta http-equiv="Content-Type" content="text/html; charset="utf-8">
        <title>Главная</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
            if(!isset($_REQUEST['name'])) {
        ?>

        <form action="" method="GET">
            <p>Введите своё имя:</p>
            <input type="text" name="name">
            <input type="submit">
        </form>

        <?php
            }
        ?>

        <?php
            if(isset($_REQUEST['name'])) {
                $name = strip_tags($_REQUEST['name']);
                echo 'Привет, '.$name;
            }
        ?>
    </body>
</html>