<?php
    //var_dump($_SESSION);

    if (isset($_SESSION['message'])) { // Если переменная info не пустая
        $status = $_SESSION['message']['status'];
        $text   = $_SESSION['message']['text'];
        echo "<p class=\"$status\">$text</p>"; // Вывод статуса

        unset($_SESSION['message']);
    }