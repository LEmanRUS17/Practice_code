<?php // Редактирование элемента
    include './elems/init.php'; // Подключение к базе данных

    if (!empty($_SESSION['auth'])) {
        function getPage($link) // Получение страницы
        {
            $title = 'admin main page'; // Название страницы

            if (isset($_GET['id'])) { // Если id передан
                $id = $_GET['id'];

                // Запрос на получение элемента по его id из БД:
                $query  = "SELECT * FROM pages WHERE id=$id";  
                $result = mysqli_query($link, $query) or die(mysqli_error($link));
                $page   = mysqli_fetch_assoc($result);

                if ($page) { // Если элемент получен
    
                    if (isset($_POST['title']) and isset($_POST['url']) and isset($_POST['text'])) { // Если переменные не пусты
                        $title = $_POST['title'];
                        $url   = $_POST['url'];
                        $text  = $_POST['text'];
                    } else { // Если переменные пусты
                        $title = $page['title'];
                        $url   = $page['url'];
                        $text  = $page['text'];
                    }

                    ob_start();                // Включение буферизации вывода
                    include 'elems/form.php';  // Подключение файла: form.php
                    $content = ob_get_clean(); // Получить содержимое текущего буфера и удалить его

                } else { // Если элемент не получен
                    $content = 'Page not found';
                }
            } else { // Если id передан
                $content = 'Page not found';
            }

            include 'elems/layout.php'; // Подключение файла: layout.php
        }
        
        function addPage($link) { // Добавление страницы
            if (isset($_POST['title']) and isset($_POST['url']) and isset($_POST['text'])) { // Если переменные не пусты
                $title = mysqli_real_escape_string($link, $_POST['title']); // Заполнение переменной с экранированием нежелательных символов
                $url   = mysqli_real_escape_string($link, $_POST['url']);   // Заполнение переменной с экранированием нежелательных символов
                $text  = mysqli_real_escape_string($link, $_POST['text']);  // Заполнение переменной с экранированием нежелательных символов

                if (isset($_GET['id'])) { // Если id передан
                    $id = $_GET['id'];

                    // Запрос на получение элементов по их id из БД:
                    $query  = "SELECT * FROM pages WHERE id=$id";
                    $result = mysqli_query($link, $query) or die(mysqli_error($link));
                    $page   = mysqli_fetch_assoc($result);

                    if ($page['url'] !== $url) { // Если url элемнте из БД не равен url введеного элемента

                        // Полечение списка url элементов из таблицы
                        $query  = "SELECT COUNT(*) as count FROM pages WHERE url='$url'";
                        $result = mysqli_query($link, $query) or die(mysqli_error($link));
                        $isPage = mysqli_fetch_assoc($result)['count'];
                        
                        if ($isPage == 1) { // Если повторяющийся url найден
                            $_SESSION['message'] = [
                                'text'   => 'Page with this url exists!', // Страница с таким URL существует!
                                'status' => 'error'                       // Ошибка
                            ];
                        }
                    }

                    // Запрос на редактирование элемента:
                    $query = "UPDATE pages SET title='$title', url='$url', text='$text' WHERE id=$id";
                    mysqli_query($link, $query) or die(mysqli_error($link));
                        
                    $_SESSION['message'] = [
                        'text'   => "Page '{$page['title']}' edited successfully", // Страница успешно отредактирована
                        'status' => 'success'                   // Успех
                    ];

                    header('Location: ../admin/index.php'); // Направление на страницу
                    die();
                }
            } else { // Если переменные пусты
                return '';
            }
        }

        addPage($link); // Выполнение функции addPage()
        getPage($link); // Выполнение функции getPage()
    } else {
        header('Location: ../admin/login.php'); // Направление на страницу
        die();
    }