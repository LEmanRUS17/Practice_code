<html>
	<head>
        <meta http-equiv="Content-Type" content="text/html; charset="utf-8">
        <title>Главная</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
            if(empty($_REQUEST['age'])) {
        ?>

        <form action="" method="GET">
            <input type="text" name="age">
            <input type="submit">
        </form>

        <?php
            }
        ?>

        <?php
            if(!empty($_REQUEST['age'])) {
                $age = stip_tags($_REQUEST['age']);
                echo 'Ваш возраст: '.$age;
            }
        ?>
    </body>
</html>