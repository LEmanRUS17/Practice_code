<html>
	<head>
        <meta http-equiv="Content-Type" content="text/html; charset="utf-8">
        <title>Главная</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <form action="" method="GET">
            Введите ваше имя:
            <input name="name" value="
                <?php if(isset($_GET['name'])) echo $_GET['name']; ?>
            "><br><br>
            <input type="submit">
        </form>

        <?php
            if(isset($_REQUEST['name'])) {
                $name = $_REQUEST['name'];
                echo $name;
            }
        ?>
    </body>
</html>