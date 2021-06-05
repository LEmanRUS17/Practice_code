<?php
    session_start(); // обязательно стартуем сессию, чтобы с ней далее работать
    $_SESSION['auth'] = null;

    $_SESSION['message'] = [
        'text'   => 'Авторизация прекращена',
        'status' => 'success'
    ];

    header('Location: ./index.php'); // Направление на страницу
    die();