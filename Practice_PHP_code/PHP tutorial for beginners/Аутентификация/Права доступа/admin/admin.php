<?php
    include '../elems/head.php'; // Подключение
    include '../elems/status_output.php';

    $title   = 'admin'; // Заголовок документа
    $content = 'admin_form.php'; // Подключаемая форма
    
    if ($_SESSION['auth']['status'] == 'admin') {
        $query = "SELECT * FROM users";
        //Делаем запрос к БД, результат запроса пишем в $result:
        $result = mysqli_query($link, $query) or die( mysqli_error($link) );
        //Преобразуем то, что отдала нам база в нормальный массив PHP $data:
        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
        //Массив результата лежит в $data, выведем его на экран:

        deletePage($link);

        include './layouts/admin_layout.php';
    }

    function deletePage($link) { // Удаление страницы
        if (isset($_GET['delete'])) { // Если GET параметр delete не пустой
            $id    = $_GET['delete']; // Запись в переменную id значения из GET параметра delete

            // Запрос на удаление элемента из БД по его id
            $query = "DELETE FROM users WHERE id=$id";
            mysqli_query($link, $query) or die(mysqli_error($link));

            statusOutput('user_deleted');

            header('Location: ../admin/admin.php'); // Направление на страницу
            die();
        }
    } 