<?php
    include './elems/status_output.php';
    
    session_start(); // обязательно стартуем сессию, чтобы с ней далее работать
    $_SESSION['auth'] = null;
    $_SESSION['id']   = null;
    
    statusOutput('authorization_off');

    header('Location: ./index.php'); // Направление на страницу
    die();