<?php
    include './elems/head.php'; // Подключение
    $content = 'users_list.php'; // Подключаемая форма

    $query = "SELECT * FROM users";
    //Делаем запрос к БД, результат запроса пишем в $result:
	$result = mysqli_query($link, $query) or die( mysqli_error($link) );
    //Преобразуем то, что отдала нам база в нормальный массив PHP $data:
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
    //Массив результата лежит в $data, выведем его на экран:

    include './layouts/user_layout.php';
