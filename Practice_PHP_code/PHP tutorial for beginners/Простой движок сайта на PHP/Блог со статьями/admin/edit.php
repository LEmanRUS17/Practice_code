<?php // Редактирование элемента
    include './elems/head.php'; // Подключение к базе данных

    if (!empty($_SESSION['auth'])) {
        
    function getPage($link) // Получение страницы
    {
        $title = 'admin main page'; // Название страницы

        if (isset($_GET['id'])) { // Если id передан
            $id = $_GET['id'];

            // Запрос на получение элемента по его id из БД:
            $query  = "SELECT * FROM статьи WHERE id=$id";  
            $result = mysqli_query($link, $query) or die(mysqli_error($link));
            $page   = mysqli_fetch_assoc($result);
            if ($page) { // Если элемент получен
                // Заполнение переменных $author, $heading и $text данными
                
                if (isset($_POST['author']) and isset($_POST['heading']) and isset($_POST['text'])) { // Если переменные не пусты
                    $author  = $_POST['author']; 
                    $heading = $_POST['heading'];
                    $text    = $_POST['text'];
                } else { // Если переменные пусты
                    $author  = $page['author']; 
                    $heading = $page['heading'];
                    $text    = $page['text'];
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
        if (isset($_POST['heading']) and isset($_POST['author']) and isset($_POST['text'])) { // Если переменные не пусты
            $heading = mysqli_real_escape_string($link, $_POST['heading']); // Заполнение переменной с экранированием нежелательных символов
            $author  = mysqli_real_escape_string($link, $_POST['author']);  // Заполнение переменной с экранированием нежелательных символов
            $text    = mysqli_real_escape_string($link, $_POST['text']);    // Заполнение переменной с экранированием нежелательных символов

            if (isset($_GET['id'])) { // Если id передан
                $id = $_GET['id'];

                // Запрос на получение элементов по их id из БД:
                $query  = "SELECT * FROM статьи WHERE id=$id";
                $result = mysqli_query($link, $query) or die(mysqli_error($link));
                $page   = mysqli_fetch_assoc($result);

                if ($page['heading'] !== $heading) { // Если url элемнте из БД не равен url введеного элемента

                    // Получение списка url элементов из таблицы
                    $query  = "SELECT COUNT(*) as count FROM статьи WHERE heading='$heading'";
                    $result = mysqli_query($link, $query) or die(mysqli_error($link));
                    $isPage = mysqli_fetch_assoc($result)['count'];

                    if ($isPage == 1) { // Если повторяющийся url найден
                        $_SESSION['message'] = [
                            'text'   => 'Статья с таким названием существует!', // Страница с таким URL существует!
                            'status' => 'error'                                 // Ошибка
                        ];
                    } else {
                        // Запрос на редактирование элемента:
                        $query = "UPDATE статьи SET author='$author', heading='$heading', text='$text' WHERE id=$id";
                        mysqli_query($link, $query) or die(mysqli_error($link));

                        $_SESSION['message'] = [
                            'text'   => "Статья '{$page['heading']}' успешно отредактирована", // Страница успешно отредактирована
                            'status' => 'success'                   // Успех
                        ];
                        
                        header('Location: ../admin/index.php'); // Направление на страницу
                        die();
                    }
                }
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
