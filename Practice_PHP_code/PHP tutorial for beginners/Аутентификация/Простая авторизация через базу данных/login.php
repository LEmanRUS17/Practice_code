<?php
    include './elems/head.php'; // Подключение
    
    // Если форма авторизации отправлена...
    if (!empty($_POST['password']) and !empty($_POST['login'])) {
        // Пишем логин и пароль из формы в переменные для удобства работы:
        $login    = $_POST['login'];
        $password = $_POST['password'];

        // Формируем и отсылаем SQL запрос:
        $query = "SELECT * FROM users WHERE login='$login' AND password='$password'";
        $result = mysqli_query($link, $query);

        // Преобразуем ответ из бд в нормальный массв PHP:
        $user = mysqli_fetch_assoc($result);

        if (!empty($user)) {
            // Пользватель прошол авторизацию, выполним какой-то код
            $_SESSION['auth'] = true;

            $_SESSION['message'] = [
                'text'   => 'Вход успешно выполнен',
                'status' => 'success'
            ];

            header('Location: ./index.php'); // Направление на страницу
            die();
        } else {
            // Пользователь неверно ввел логин или пароль, выыполним какой-то код
            $_SESSION['message'] = [
                'text'   => 'Логин или пароль введен неверно',
                'status' => 'error'
            ];
            
            include './layouts/authorization_layout.php';            
        }
    } else {
        include './layouts/authorization_layout.php';
    }
?>


    