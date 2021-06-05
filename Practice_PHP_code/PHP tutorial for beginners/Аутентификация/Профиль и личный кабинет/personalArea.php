<?php
    include './elems/head.php';          // Подключение
    include './elems/status_output.php'; // Подключение для вывода информации

    addPage($link); // Выполнение функции addPage()
    getPage($link); // Выполнение функции getPage()

    function getPage($link) {
        $id = $_SESSION['id'];

        $title   = 'Личный кабинет';         // Заголовок документа
        $content = 'personal_area_form.php'; // Подключаемая форма
        
        // Запрос на получение о пользователе:
        $query = "SELECT * FROM users WHERE id='$id'";
        $result = mysqli_query($link, $query) or die(mysqli_error($link));
        $page   = mysqli_fetch_assoc($result);

        $login      = $page['login'];
        $email      = $page['email'];
        $name       = $page['name'];
        $surname    = $page['surname'];
        $patronymic = $page['patronymic'];

        include './layouts/user_layout.php';
    }
    
    function addPage($link) {
        if (isset($_POST['login']) and isset($_POST['email'])) { // Если переменные не пусты
            $id         = $_SESSION['id'];
            $login      = mysqli_real_escape_string($link, $_POST['login']);
            $email      = mysqli_real_escape_string($link, $_POST['email']);
            $name       = mysqli_real_escape_string($link, $_POST['name']);
            $surname    = mysqli_real_escape_string($link, $_POST['surname']);
            $patronymic = mysqli_real_escape_string($link, $_POST['patronymic']);

            // Запрос на получение элементов по их id из БД:
            $query  = "SELECT * FROM users WHERE id=$id";
            $result = mysqli_query($link, $query) or die(mysqli_error($link));
            $page   = mysqli_fetch_assoc($result);

            if ($page['login'] !== $login) { // Если login элемнта из БД не равен login введеного элемента
                
                // Полечение списка login элементов из таблицы
                $query  = "SELECT COUNT(*) as count FROM users WHERE login='$login'";
                $result = mysqli_query($link, $query) or die(mysqli_error($link));
                $isPage = mysqli_fetch_assoc($result)['count'];

                if ($isPage == 1) { // Если повторяющийся login найден
                    statusOutput('Login_not_available'); // Вывод информации
                    return '';
                } 
            }
            // Запрос на изменение данных в БД
            $query = "UPDATE users SET login='$login', 
                                       email='$email', 
                                       name='$name', 
                                       surname='$surname', 
                                       patronymic='$patronymic' WHERE id=$id";
            mysqli_query($link, $query) or die(mysqli_error($link));

            statusOutput('Profile_changed'); // Вывод информации

            $_SESSION['auth'] = [
                'autentificator' => true,
                'login'          => $login
            ];

            header('Location: ./index.php'); // Направление на страницу
            die();
        } else {
            return '';
        }
    }