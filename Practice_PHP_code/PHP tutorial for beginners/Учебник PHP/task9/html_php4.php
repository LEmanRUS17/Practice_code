<html>
	<head>
        <meta http-equiv="Content-Type" content="text/html; charset="utf-8">
        <title>Главная</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
            if(!isset($_REQUEST['login']) && empty($_REQUEST['pass'])) {
        ?>

        <form action="" method="GET">
            Введита логин:
            <input type="text" name="login"><br><br>
            Введите пароль:
            <input type="password" name="pass"><br><br>
            <input type="submit" value="Ввести данные">
        </form>

        <?php
            }
        ?>

        <?php
            $login_1 = 'QWE';
            $pass_1 = '12345';
            if(isset($_REQUEST['login']) && !empty($_REQUEST['pass'])) {
                $login = trim(strip_tags($_REQUEST['login']));
                $pass  = trim(strip_tags($_REQUEST['pass']));
                if($login_1 == $login && $pass_1 == $pass) 
                    echo 'Доступ разрешен!';
                else
                    echo 'Доступ запрещен!';
            }
        ?>
    </body>
</html>