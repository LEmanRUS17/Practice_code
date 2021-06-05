<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>form</title>
    </head>
    <body>
        <div id="wrapper">
            <header>
                header
            </header>
            <main>
                <?php include './elems/info.php' ?>

                <form action="" method="POST">
                    login:<input name="login"><br>
                    password:<input name="password" type="password"><br>
                    <input type="submit" value="Отправить">
                </form>
            </main>
            <footer>
                footer
            </footer>
        </div>
    </body>
</html>

