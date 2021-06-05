<?php
    include './elems/head.php'; // Подключение

    $title   = 'registration'; // Заголовок документа
    $content = 'registration'; // Подключаемая форма

    if (!empty($_POST['login']) and !empty($_POST['password']) and !empty($_POST['confirm'])) { // Если логин, пароль и подтверждение пароля введенны

        if ($_POST['password'] == $_POST['confirm']) { // Пароль и подтверждение совпадают - регистрируем
            // Пишем логин, пароль, email и дату рождения из формы в переменные для удобства работы:
            $login       = $_POST['login'];
            $password    = md5($_POST['password']);
            $email       = $_POST['email'];
            $dateOfBirth = $_POST['dateOfBirth'];
            $date        = date('Y-m-d'); // Дата регестрации
            
            if (loginVerification($login)) { // Проверка логина на недопустимые символы
                // Запрос для получения пользователя с введенным логином
                $query = "SELECT * FROM users WHERE login='$login'";
                $user  = mysqli_fetch_assoc(mysqli_query($link, $query));

                if (empty($user)) { // Если пользователя с введенным логином не существует
                    // Формируем и отсылаем SQL запрос:
                    $query = "INSERT INTO users SET login='$login', 
                                                    password='$password', 
                                                    email='$email', 
                                                    date_of_birth='$dateOfBirth',
                                                    registration_date='$date'";
                    mysqli_query($link, $query);

                    // Пишем в сессию пометку об авторизации:
                    $_SESSION['auth'] = [
                        'autentificator' => true,
                        'login'          => $login
                    ];

                    // Получаем id вставленной записи и пишем его в сессию:
                    $id = mysqli_insert_id($link);
                    $_SESSION['id'] = $id;

                    header('Location: ./index.php'); // Направление на страницу
                    die();

                } else { // Если введеный логин уже занят другим пользователем
                    statusOutput('users_exist');
                }
            } else { // Если в логине пресутствуют недопустимые символы
                statusOutput('unacceptable_symbols');
            }
        } else { // Пароль и подтверждение НЕ совпадают - выведем сообщение
            statusOutput('passwords_do_not_match');
        }
    }
    
    include './layouts/user_layout.php'; 

    function loginVerification($login) {
        $chars = ['!','#', '-', '+', '=']; // символы для удаления
        if ($login == str_replace($chars, '', $login)) {
            return true;
        }
    }

    function statusOutput($status) {
        switch ($status) {
            case 'unacceptable_symbols':
                $_SESSION['message'] = [
                    'text'   => 'логин содержит недопустимые символы',
                    'status' => 'error'
                ];
            break;
            case 'users_exist':
                $_SESSION['message'] = [
                    'text'   => 'Пользователь с таким логином уже существует',
                    'status' => 'error'
                ];
            break;
            case 'passwords_do_not_match':
                $_SESSION['message'] = [
                    'text'   => 'Пароль веден не верно',
                    'status' => 'error'
                ];
            break;
            default:
                $_SESSION['message'] = [
                    'text'   => 'Непредвиденная ошибка',
                    'status' => 'error'
                ];
        }
    }