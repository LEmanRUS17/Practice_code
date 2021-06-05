<?php
    session_start();
    // Инициализируем сессию:

    if(!isset($_SESSION['test'])) {
        $_SESSION['test'] = 1;
        echo 'Вы не обновляли страницу';
    } else {
        $_SESSION['test'] += 1;
        echo 'Вы обнавили страницу '.$_SESSION['test'].' раз!';
    }
?>