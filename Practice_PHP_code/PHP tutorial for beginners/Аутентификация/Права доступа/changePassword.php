<?php
    include './elems/head.php';          // Подключение
    include './elems/status_output.php'; // Подключение для вывода информации
    
    $content = 'change_password_form.php'; // Подключаемая форма

    $id = $_SESSION['id']; // id юзера из сессии

    $query = "SELECT * FROM users WHERE id='$id'"; // получаем юзера по $id из сессии
    $result = mysqli_query($link, $query);
    $user = mysqli_fetch_assoc($result);

    $hash = $user['password']; // соленый пароль из БД

    // Проверка ввода пароля:
    if (isset($_POST['old_password'])) {
        // Проверяем соответствие хеша из базы введенному старому паролю:
        if (password_verify($_POST['old_password'], $hash) && password_verify($_POST['confirm'], $hash)) {
            // Все ок, меняем пароль...
            
            // Хеш нового пароля:
            $newPasswordHash = password_hash($_POST['new_password'], PASSWORD_DEFAULT);
            
            // Выполним UPDATE запрос:
            $query = "UPDATE users SET password='$newPasswordHash' WHERE id='$id'";
            mysqli_query($link, $query);

            statusOutput('password_change'); // Вывод информации

            header('Location: ./index.php'); // Направление на страницу
            die();
        } else {
            // Старый пароль введен неверно, выведем сообщение
            
            statusOutput('passwords_do_not_match'); // Вывод информации
        }
    }
	
    include './layouts/user_layout.php'; 