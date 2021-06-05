<?php
    include './elems/init.php'; // Подключение к базе данных

    // Проверка на наличие GET:
    if (isset($_GET['page'])) { // если GET передан
        $page = $_GET['page'];  // записать в page переданную страницу
    } else {
        $page = '/';    // записать в page фиксированую страницу
    }

    $query = "SELECT * FROM pages WHERE url='$page'";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    $page = mysqli_fetch_assoc(($result));

    // Проверка существования страницы:
    if (!$page) {                          // если странича существует
        $query = "SELECT * FROM pages WHERE url='404'";
        $result = mysqli_query($link, $query) or die(mysqli_error($link));
        $page = mysqli_fetch_assoc(($result));
        header("HTTP/1.0 404 Not Found");              // передать статус 404
    }

    $title = $page['title'];
    $content = $page['text'];
    
    include 'elems/layout.php';