<?php
    include './elems/init.php'; // Подключение к базе данных
    
    if (!empty($_SESSION['auth'])) {
        function showPageTable($link) { // Показать таблицу страниц
            // Получить список страниц игнарируя страницу 404:
            $query  = "SELECT id, title, url FROM pages WHERE url !='404'";
            $result = mysqli_query($link, $query) or die(mysqli_error($link));
            for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

            // Шапка таблицы:
            $content = '<table>
                            <tr>
                                <th>title</th>
                                <th>url</th>
                                <th>edit</th>
                                <th>delete</th>
                            </tr>';
            foreach ($data as $page) { // Заполнение таблицы
                $content .= "<tr>
                                <td>{$page['title']}</td>
                                <td>{$page['url']}</td>
                                <td><a href=\"http://localhost/php/Учебник PHP/Простой движок сайта на PHP/Движок через базу данных/admin/edit.php?id={$page['id']}\">edit</a></td>
                                <td><a href=\"?delete={$page['id']}\">delete</a></td>
                            </tr>";
            }
            $content .= '</table>'; // Закрывающий тег таблицы

            $title = 'admin main page'; // Название страницы
            
            include 'elems/layout.php'; // Подключение файла: layout.php
        }

        function deletePage($link) { // Удаление страницы
            if (isset($_GET['delete'])) { // Если GET параметр delete не пустой
                $id    = $_GET['delete']; // Запись в переменную id значения из GET параметра delete

                // Запрос на удаление элемента из БД по его id
                $query = "DELETE FROM pages WHERE id=$id";
                mysqli_query($link, $query) or die(mysqli_error($link));

                $_SESSION['message'] = [
                    'text'   => 'Page deleted successfully', // Страница успешно удалена
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
