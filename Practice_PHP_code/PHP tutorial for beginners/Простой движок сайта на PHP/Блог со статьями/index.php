<?php
    include './elems/head.php'; // Подключение
    
    // Проверка на наличие GET:
    if (isset($_GET['heading'])) { // если GET передан
        $heading = $_GET['heading'];  // записать в page переданную страницу
    } else {
        $heading = '/';    // записать в page фиксированую страницу
    }

    $query = "SELECT heading FROM статьи WHERE heading='$heading'";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    $page = mysqli_fetch_assoc(($result));

    $heading = $page['heading'];

    //var_dump($page);
    include 'elems/layout.php';