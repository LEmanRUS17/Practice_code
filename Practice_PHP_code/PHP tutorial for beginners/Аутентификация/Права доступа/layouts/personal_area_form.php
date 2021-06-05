<form action="" method="POST" class="contact_form" name="contact_form">
    <ul>
        <li>
            <span><h2>Редактирование профиля:</h2></span>
        </li>
        <li>
            <label for="login">Логин:</label><input name="login" value="<?= $login ?>">
        </li>
        <li>
            <label for="email">email:</label><input name="email" type="email" value="<?= $email ?>">
        </li>
        <li>
            <label for="name">Имя: </label><input name="name" type="text" value="<?= $name ?>">
        </li>
        <li>
            <label for="surname">Фамилия:</label><input name="surname" type="text" value="<?= $surname ?>">
        </li>
        <li>
            <label for="patronymic">Отчество:</label><input name="patronymic" type="text" value="<?= $patronymic ?>">
        </li>
        <li>
            <input type="submit" value="Сохранить">
        </li>
    </ul>
</form>