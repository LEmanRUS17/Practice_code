<style>
    a {
        text-decoration: none;
    }
    a.active {
        text-decoration: underline;
    }
</style>
<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 'on');

    //Устанавливаем доступы к базе данных:
    $host     = 'localhost'; //имя хоста, на локальном компьютере это localhost
    $user     = 'root';      //имя пользователя, по умолчанию это root
    $password = 'mysql';     //пароль, по умолчанию пустой
    $db_name  = 'практика';  //имя базы данных

    //Соединяемся с базой данных используя наши доступы:
    $link = mysqli_connect($host, $user, $password, $db_name) or die(mysqli_errno($link));

    mysqli_query($link, "SET NAMES 'utf8'"); // кодировка

    // если страница не указана начинаем с первой
    if (isset($_GET['page'])) {
        $page = $_GET['page']; // номер страницы
    } else {
        $page = 1; // номер страницы
    }
    
    $notesOnPage = 3;      // количество элементов на странице

    $froms = ($page - 1) * $notesOnPage; // старт осчета в таблице

    $query = "SELECT * FROM workers WHERE id > 0 LIMIT $froms, $notesOnPage"; // получить данные из таблицы
    $result = mysqli_query($link, $query) or die(mysqli_error($link));        // отправка запроса

    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row); // преобразование данных в масив
    var_dump($data);


    $query  = "SELECT COUNT(*) as count FROM workers";                 // получить данные из таблицы
    $result = mysqli_query($link, $query) or die(mysqli_error($link)); // отправка запроса
    $count  = mysqli_fetch_assoc($result)['count'];
    $pagesCount = ceil($count / $notesOnPage);

    if ($page != 1) {
        $prev = $page - 1;
        echo "<a href=\"?page=$prev\"><<</a>";
    }

    $pageMax = 1;
    
    // Динамический вавод сылок на страницы
    for ($i = 1; $i <= $pagesCount; $i++ ) {
        if ($page == $i) {
            $class = 'class="active"';
        } else {
            $class = '';
        }

        echo "<a href=\"?page=$i\"$class>$i</a>";
        $pageMax = $i;
    }

    if ($page != $pageMax) {
        $prev = $page + 1;
        echo "<a href=\"?page=$prev\">>></a>";
    }
?>