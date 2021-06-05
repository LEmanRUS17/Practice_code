<table border="1">
    <tr>
        <th>id</th>
        <th>login</th>
        <th>email</th>
        <th>Дата регистрации</th>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Отчество</th>
        <th>Дата рождения</th>
        <th>Статус</th>
        <th>Удалить</th>
    </tr>
    <?php
        foreach ($data as $page) {
            if ($page['status'] == 'admin') {
                $class = 'class="admin"';
            } else {
                $class = 'class="user"';
            }
            echo "<tr $class>
                    <td>{$page['id']}</td>
                    <td>{$page['login']}</td>
                    <td>{$page['email']}</td>
                    <td>{$page['registration_date']}</td>
                    <td>{$page['name']}</td>
                    <td>{$page['surname']}</td>
                    <td>{$page['patronymic']}</td>
                    <td>{$page['date_of_birth']}</td>
                    <td>{$page['status']}</td>
                    <td><a href=\"?delete={$page['id']}\">delete</a></td>
                </tr>";
        }
    ?>
</table>