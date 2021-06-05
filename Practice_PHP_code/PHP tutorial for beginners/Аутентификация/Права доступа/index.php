<?php
    include './elems/head.php'; // Подключение
    
    $user          = '';
    $content_admin = '';

    if (!empty($_SESSION['auth']['autentificator'])) {
        $login  = $_SESSION['auth']['login'];
        $status = $_SESSION['auth']['status'];

        $user = '<p>Вы вошли как: <a href="./profile.php">' .  $login . '</a></p>';
        $user .= '<p>Ваш статус: ' . $status . '</p>';

        if ($login == 'admin') {
            $content_admin = '<a href="./admin/admin.php">Страница администрирования</a>';
        }
    } else {
        $user = '';
    }

    include './layouts/main_layout.php';