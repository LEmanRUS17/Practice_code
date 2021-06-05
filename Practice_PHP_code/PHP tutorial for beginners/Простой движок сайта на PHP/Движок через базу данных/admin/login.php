<?php
    include './elems/init.php'; // Подключение к базе данных
    
    // echo md5('123');

    if (isset($_POST['password']) and md5($_POST['password']) == '202cb962ac59075b964b07152d234b70') {
        $_SESSION['auth'] = true;

        
        $_SESSION['message'] = [
            'text'   => 'You login successfully', // Страница успешно удалена
            'status' => 'success'                 // Успех
        ];

        header('Location: ../admin/index.php'); // Направление на страницу
        die();
    } else {
        ?>
            <form method="POST">
                <input type="password" name="password">
                <input type="submit">
            </form>
        <?php
    }
