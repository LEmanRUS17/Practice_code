<?php
    include './elems/head.php'; // Подключение

    $query = "SELECT * FROM статьи WHERE heading='$heading'";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    $page = mysqli_fetch_assoc(($result));

    $content = "<div class=\"article\">
                    <h1 class=\"heading\">{$page['heading']}</h1>
                    <p class=\"text\">{$page['text']}</p>
                    <div class=\"footerArticle\">
                        <span class=\"data\">{$page['data']};</span>
                        <span class=\"author\">{$page['author']}</span>
                    </div>
                </div>";
    
    echo $content;