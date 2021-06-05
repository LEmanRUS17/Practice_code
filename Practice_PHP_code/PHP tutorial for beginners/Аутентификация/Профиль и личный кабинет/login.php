<?php
    include './elems/head.php'; // Подключение
    include './elems/status_output.php';
    
    $title   = 'authorization'; // Заголовок документа
    $content = 'authorization_form.php'; // Подключаемая форма

    // Если форма авторизации отправлена...
    if (!empty($_POST['password']) and !empty($_POST['login'])) {
        // Пишем логин и пароль из формы в переменные для удобства работы:
        $login = $_POST['login'];

        // Формируем и отсылаем SQL запрос:
        $query  = "SELECT * FROM users WHERE login='$login'";
        $result = mysqli_query($link, $query);
        $user   = mysqli_fetch_assoc($result); // Преобразуем ответ из бд в нормальный массв PHP
        
        if (!empty($user)) {
            $hash = $user['password']; // соленый пароль из БД
            
            if (password_verify($_POST['password'], $hash)) {
                // Пользватель прошол авторизацию, выполним какой-то код
                $_SESSION['auth'] = [ // делаем пометку об авторизации
                    'autentificator' => true,
                    'login'          => $login
                ];
                $_SESSION['id'] = $user['id'];  // записываем id пользователя, полученный из БД

                statusOutput('signed_in');

                header('Location: ./index.php'); // Направление на страницу
                die();
            } else {
                statusOutput('wrong_login_or_password');
                include './layouts/user_layout.php'; 
            }
        } else {
            // Пользователь неверно ввел логин , выполним какой-то код
            statusOutput('wrong_login_or_password');
            include './layouts/user_layout.php';            
        }
    } else {
        include './layouts/user_layout.php';  
    }