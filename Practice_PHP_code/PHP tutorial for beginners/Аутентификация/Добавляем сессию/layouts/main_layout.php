<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title><?= $title ?></title>
    </head>
    <body>
        <div id="wrapper">
            <header>
                header
            </header>
            <main>
                <a href="./login.php">login</a>
                <a href="./logout.php">logout</a>
                <?php include './elems/info.php' ?>
                <?php
                    if (!empty($_SESSION['auth']['autentificator'])) {
                        echo '<p>Вы вошли как: ' . $_SESSION['auth']['login'] . '</p>';
                        include './main.php';
                    }
                ?>
            </main>
            <footer>
                footer
            </footer>
        </div>
    </body>
</html>