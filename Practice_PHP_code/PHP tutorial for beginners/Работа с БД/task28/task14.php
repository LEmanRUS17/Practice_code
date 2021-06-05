<?php
	//Устанавливаем доступы к базе данных:
    $host     = 'localhost'; //имя хоста, на локальном компьютере это localhost
    $user     = 'root';      //имя пользователя, по умолчанию это root
    $password = 'mysql';     //пароль, по умолчанию пустой
    $db_name  = 'test';      //имя базы данных

    //Соединяемся с базой данных используя наши доступы:
    $link = mysqli_connect($host, $user, $password, $db_name);

    //Устанавливаем кодировку (не обязательно, но поможет избежать проблем):
    mysqli_query($link, "SET NAMES 'utf8'");
    
    //Формируем тестовый запрос:
    $query = "SELECT * FROM workres WHERE (age >= 23) AND (age < 27) OR (salary = 1000)";

    //Делаем запрос к БД, результат запроса пишем в $result:
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
    
	//Преобразуем то, что отдала нам база в нормальный массив PHP $data:
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
        
    //Проверяем что же нам отдала база данных, если null – то какие-то проблемы:
    echo '<pre>';
    var_dump($data);
    echo '<pre>';
?>