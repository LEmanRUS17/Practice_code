<?php
    include './elems/head.php'; // Подключение

    function createLink($href = '/') {
        if (!isset($_GET['heading']) || $_GET['heading'] == $href) {
            $class = ' class="active"';
        } else {
            $class = '';
        }

        if ($href != '/') {
            $hrefPart = '?heading=';
        } else {
            $hrefPart = '';
        }
        
        echo "<a href=\"$hrefPart$href\"$class>$href</a>";
    }

    $query = "SELECT heading FROM статьи ORDER BY data DESC";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

    //var_dump($data);

    foreach ($data as $page) {
        createLink($page['heading']);
    }