<?php
    error_reporting(E_ALL);          // Добавлять в отчет все ошибки PHP
    ini_set('display_errors', 'on'); // Значение настройки конфигурации 

    // Устанавливаем доступы к базе данных:
    $host     = 'localhost';   // имя хоста, на локальном компьютере это localhost
    $user     = 'root';        // имя пользователя, по умолчанию это root
    $password = 'mysql';       // пароль, по умолчанию пустой
    $db_name  = 'testauthorization'; // имя базы данных 

    // Соединяемся с базой данных используя наши доступы:
    $link = mysqli_connect($host, $user, $password, $db_name) or die(mysqli_errno($link));
    // Устанавливаем кодировку (не обязательно, но поможет избежать проблем):
    mysqli_query($link, "SET NAMES 'utf8'");

    // Подключение для работы с сесиями
    session_start(); 
?>