<?php // Добавление в базу данных:
    

    include './elems/init.php'; // Подключение к базе данных

    if (!empty($_SESSION['auth'])) {
        function getPage() // Получение страницы
        {
            $title = 'admin main page'; // Название страницы

            // Заполнение переменных $title, $url и $text данными
            if (isset($_POST['title']) and isset($_POST['url']) and isset($_POST['text'])) { // Если переменные не пусты
                $title = $_POST['title']; 
                $url   = $_POST['url'];
                $text  = $_POST['text'];
            } else { // Если переменные пусты
                $title = '';
                $url   = '';
                $text  = '';
            }

            ob_start();                // Включение буферизации вывода
            include 'elems/form.php';  // Подключение файла: form.php
            $content = ob_get_clean(); // Получить содержимое текущего буфера и удалить его

            include 'elems/layout.php'; // Подключение файла: layout.php
        }
        
        function addPage($link) { // Добавление страницы
            if (isset($_POST['title']) and isset($_POST['url']) and isset($_POST['text'])) { // Если переменные не пусты
                $title = mysqli_real_escape_string($link, $_POST['title']); // Заполнение переменной с экранированием нежелательных символов
                $url   = mysqli_real_escape_string($link, $_POST['url']);   // Заполнение переменной с экранированием нежелательных символов
                $text  = mysqli_real_escape_string($link, $_POST['text']);  // Заполнение переменной с экранированием нежелательных символов
                
                // Отправка запроса в БД для получения элемента:
                $query  = "SELECT COUNT(*) as count FROM pages WHERE url='$url'";
                $result = mysqli_query($link, $query) or die(mysqli_error($link));
                $isPage = mysqli_fetch_assoc($result)['count'];
                //var_dump($isPage);

                if ($isPage) { // Если элемент присутствует в БД
                    $_SESSION['message'] = [
                        'text'   => 'Page with this url exists!', 
                        'status' => 'error'
                    ];
                } else { // Если элемент отсутствует в БД
                    //Отправка запроса в БД на добавление элемента:
                    $query = "INSERT INTO pages (title, url, text) VALUES ('$title', '$url', '$text')";
                    mysqli_query($link, $query) or die(mysqli_error($link));

                    $_SESSION['message'] = [
                        'text'   => 'Page added successfull', 
                        'status' => 'success'
                    ];

                    header('Location: ../admin/index.php'); // Направление на страницу
                    die();
                }
            } else {
                return '';
            }
        }

        addPage($link); // Выполнение функции addPage()
        getPage();      // Выполнение функции getPage()
    } else {
        header('Location: ../admin/login.php'); // Направление на страницу
        die();
    }