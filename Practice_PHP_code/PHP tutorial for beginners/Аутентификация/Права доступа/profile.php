<?php
    include './elems/head.php'; // Подключение
    
    $title   = 'profile';          // Заголовок документа
    $content = 'profile_form.php'; // Подключаемая форма

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    } else {
        $id = $_SESSION['id'];
    }    

    // Запрос на получение информации о пользователе
    $query = "SELECT * FROM users WHERE id=$id";
    $user  = mysqli_fetch_assoc(mysqli_query($link, $query));

    $login             = $user['login'];
    $name              = $user['name'];
    $surname           = $user['surname'];
    $patronymic        = $user['patronymic'];
    $registration_date = $user['registration_date'];
    $date_of_birth     = getAge($user['date_of_birth']);

    include './layouts/user_layout.php';

    function getAge($date) { // Получение количества лет
        $keywords = preg_split("/[^0-9]+/", $date);
        $date = time() - mktime(0, 0, 0, $keywords[1], $keywords[2], $keywords[0]);
        return round($date / 60 / 60 / 24 / 30.41 / 12);
    }