<?php
    include './elems/head.php'; // Подключение

    $title   = 'authorization'; // Заголовок документа
    $content = 'authorization'; // Подключаемая форма

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
                $_SESSION['auth'] = [
                    'autentificator' => true,
                    'login'          => $login
                ];

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

    function statusOutput($status) {
        switch ($status) {
            case 'wrong_login_or_password':
                $_SESSION['message'] = [
                    'text'   => 'Логин или пароль введен неверно',
                    'status' => 'error'
                ];
            break;
            case 'signed_in':
                $_SESSION['message'] = [
                    'text'   => 'Вход успешно выполнен',
                    'status' => 'success'
                ];
            break;
            default:
                $_SESSION['message'] = [
                    'text'   => 'Непредвиденная ошибка',
                    'status' => 'error'
                ];
        }
    }
    