<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 'on');

    // Проверка на наличие GET:
    if (isset($_GET['page'])) { // если GET передан
        $page = $_GET['page'];  // записать в page переданную страницу
    } else {
        $page = 'index.php';    // записать в page фиксированую страницу
    }

    $path = "pages/$page.php"; // записать адрес страницы
    // Проверка существования страницы:
    if (file_exists($path)) {                          // если странича существует
        $content = file_get_contents($path);           // перейти на переданную страницу
    } else {
        $content = file_get_contents("pages/404.php"); // перейти на страницу 404
        header("HTTP/1.0 404 Not Found");              // передать статус 404
    }

    $reg = '#\{\{title:(.*?)\}\}#'; // регулярка
    // Получение тайтла страницы:
    if (preg_match($reg, $content, $match)) {              // если тайтл найден
        $desc = $match[1];                                 // запись тайтла в переменную
        $content = trim(preg_replace($reg, '', $content)); // удаление лишних пробелов
    } else {
        $desc = 'error';
    }

    include 'layout.php';
?>