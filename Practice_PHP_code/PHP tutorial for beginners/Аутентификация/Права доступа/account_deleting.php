<?php
    include './elems/head.php';          // Подключение
    include './elems/status_output.php'; // Подключение для вывода информации

    $title   = 'Удаление акаунта';          // Заголовок документа
    $content = 'account_deleting_form.php'; // Подключаемая форма

    $id = $_SESSION['id']; // id юзера из сессии

    $query = "SELECT * FROM users WHERE id='$id'"; // получаем юзера по $id из сессии
    $result = mysqli_query($link, $query);
    $user = mysqli_fetch_assoc($result);

    $hash = $user['password']; // соленый пароль из БД

    // Проверка ввода пароля
    if (isset($_POST['password'])) {
        // Проверяем соответствие хеша из базы введенному старому паролю:
        if (password_verify($_POST['password'], $hash) && password_verify($_POST['confirm'], $hash)) {
            // Все ок, выполняем удаление...

            $query = "DELETE FROM users WHEre id='$id'";
            mysqli_query($link, $query);
            
            statusOutput('user_deleted'); // Вывод информации

            $_SESSION['auth'] = [ // делаем пометку об авторизации
                'autentificator' => null,
                'login'          => null,
                'status'         => $user['status']
            ];
            
            header('Location: ./index.php'); // Направление на страницу
            die();
        } else {
            statusOutput('passwords_do_not_match'); // Вывод информации
        }
    }

    include './layouts/user_layout.php';