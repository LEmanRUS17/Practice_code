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
            Введите сообщение:
            <textarea name="value">
                <?php if(isset($_GET['value'])) echo $_GET['value']; ?>
            </textarea><br><br>
            <input type="submit">
        </form>
    </body>
</html>