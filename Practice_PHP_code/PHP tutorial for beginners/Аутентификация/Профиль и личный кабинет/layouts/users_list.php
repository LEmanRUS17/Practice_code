<p>Список пользователей:</p>
<ul>
    <?php
        foreach ($data as $page) {
            echo "<li><a href=\"profile.php?id={$page['id']}\">{$page['login']}</a></li>";
        }
    ?>
</ul>