<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="main_style.css">   
        <title>title</title>
    </head>
    <body>
        <header>
            header
        </header>
        <div class="main-content">
            <nav>
                <?php
                    if (!empty($_SESSION['auth']['autentificator'])) {
                        echo '<a href="./logout.php">Выйти</a>';
                        echo '<a href="./personalArea.php">Личный кабинет</a>';
                        echo '<a href="./changePassword.php">Сменить пароль</a>';
                        echo '<a href="./account_deleting.php">Удалить акаунт</a>';
                    } else {
                        echo '<a href="./login.php">Войти</a>';
                    }
                ?>
                
                <a href="./register.php">Регистрация</a>
                <a href="./users.php">Пользователи</a>
                
            </nav>
            <main>
                <?php include './elems/info.php' ?>
                <?php
                    if (!empty($_SESSION['auth']['autentificator'])) {
                        echo '<p>Вы вошли как: <a href="./profile.php">' . $_SESSION['auth']['login'] . '</a></p>';
                        include './main.php';
                    }
                ?>
            </main>
        </div>
        <footer>
            footer
        </footer>
    </body>
</html>