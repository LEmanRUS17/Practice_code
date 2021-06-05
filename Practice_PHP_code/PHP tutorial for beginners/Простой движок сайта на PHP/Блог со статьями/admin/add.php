<?php // Добавление в базу данных:
    include './elems/head.php'; // Подключение к базе данных

    if (!empty($_SESSION['auth'])) {

        function getPage() // Получение страницы
        {
            $title = 'admin main page'; // Название страницы

            // Заполнение переменных $author, $heading и $text данными
            if (isset($_POST['author']) and isset($_POST['heading']) and isset($_POST['text'])) { // Если переменные не пусты
                $author  = $_POST['author']; 
                $heading = $_POST['heading'];
                $text    = $_POST['text'];
            } else { // Если переменные пусты
                $author  = '';
                $heading = '';
                $text    = '';
            }

            ob_start();                // Включение буферизации вывода
            include 'elems/form.php';  // Подключение файла: form.php
            $content = ob_get_clean(); // Получить содержимое текущего буфера и удалить его

            include 'elems/layout.php'; // Подключение файла: layout.php
        }
        
        function addPage($link) { // Добавление страницы
            if (isset($_POST['heading']) and isset($_POST['author']) and isset($_POST['text'])) { // Если переменные не пусты
                $heading = mysqli_real_escape_string($link, $_POST['heading']); // Заполнение переменной с экранированием нежелательных символов
                $author  = mysqli_real_escape_string($link, $_POST['author']);  // Заполнение переменной с экранированием нежелательных символов
                $text    = mysqli_real_escape_string($link, $_POST['text']);    // Заполнение переменной с экранированием нежелательных символов
                    
                // Отправка запроса в БД для получения элемента:
                $query  = "SELECT COUNT(*) as count FROM статьи WHERE heading='$heading'";
                $result = mysqli_query($link, $query) or die(mysqli_error($link));
                $isPage = mysqli_fetch_assoc($result)['count'];
                //var_dump($isPage);

                if ($isPage) { // Если элемент присутствует в БД

                } else { // Если элемент отсутствует в БД
                    //Отправка запроса в БД на добавление элемента:
                    $query = "INSERT INTO статьи (heading, author, text) VALUES ('$heading', '$author', '$text')";
                    mysqli_query($link, $query) or die(mysqli_error($link));

                    $_SESSION['message'] = [
                        'text'   => 'Статья добавлена', 
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
