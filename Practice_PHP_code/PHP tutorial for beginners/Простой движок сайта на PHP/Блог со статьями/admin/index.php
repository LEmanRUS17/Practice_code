<?php
    include './elems/head.php'; // Подключение к базе данных
    
    if (!empty($_SESSION['auth'])) {

    function showPageTable($link) { // Показать таблицу страниц
        // Получить список страниц игнарируя страницу 404:
        $query  = "SELECT * FROM статьи ";
        $result = mysqli_query($link, $query) or die(mysqli_error($link));
        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
        //var_dump($data);

        // Шапка таблицы:
        $content = '<table>
                        <tr>
                            <th>Заголовок</th>
                            <th>Автор</th>
                            <th>Дата и вдемя добавления</th>
                            <th>Текст статьи</th>
                            <th>Редактирование</th>
                            <th>Удаление</th>
                        </tr>';
        foreach ($data as $page) { // Заполнение таблицы
            $content .= "<tr>
                            <td>{$page['heading']}</td>
                            <td>{$page['author']}</td>
                            <td>{$page['data']}</td>
                            <td>{$page['text']}</td>
                            <td><a href=\"../admin/edit.php?id={$page['id']}\">edit</a></td>
                            <td><a href=\"?delete={$page['id']}\">delete</a></td>
                        </tr>";
        }
        $content .= '</table>'; // Закрывающий тег таблицы

        $title = 'admin main page'; // Название страницы
            
        include 'elems/layout.php'; // Подключение файла: layout.php
    }

    function deletePage($link) { // Удаление страницы
        if (isset($_GET['delete'])) { // Если GET параметр delete не пустой
            $id = $_GET['delete'];    // Запись в переменную id значения из GET параметра delete

            // Запрос на удаление элемента из БД по его id
            $query = "DELETE FROM статьи WHERE id=$id";
            mysqli_query($link, $query) or die(mysqli_error($link));

            $_SESSION['message'] = [
                'text'   => 'Статья успешно удалена', // Страница успешно удалена
                'status' => 'success'                    // Успех
            ];

            header('Location: ../admin/index.php'); // Направление на страницу
            die();
        }
    }    

    deletePage($link);    // Выполнение функции deletePage()
    showPageTable($link); // Выполнение функции showPageTable()

    } else {
        header('Location: ../admin/login.php'); // Направление на страницу
        die();
    }