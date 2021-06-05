<?php
    include './elems/head.php'; // Подключение
    include './elems/status_output.php';
    
    $title   = 'registration'; // Заголовок документа
    $content = 'registration_form.php'; // Подключаемая форма

    if (!empty($_POST['login']) and !empty($_POST['password']) and !empty($_POST['confirm'])) { // Если логин, пароль и подтверждение пароля введенны

        if ($_POST['password'] == $_POST['confirm']) { // Пароль и подтверждение совпадают - регистрируем
            // Пишем логин, пароль, email и дату рождения из формы в переменные для удобства работы:
            $login       = $_POST['login'];
            $password    = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $email       = $_POST['email'];
            $name        = $_POST['name'];
            $surname     = $_POST['surname'];
            $patronymic  = $_POST['patronymic'];
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
                                                    name='$name',
                                                    surname='$surname',
                                                    patronymic='$patronymic',
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