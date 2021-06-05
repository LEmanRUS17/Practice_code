<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset="utf-8">
		<title>PHP database</title>
	</head>
	<body>
        <a href="add.php">Добавить сотрудника</a>

        <table border="1">
            <tr>
                <th>id</th>
                <th>name</th>
                <th>age</th>
                <th>salary</th>
                <th>delete</th>
            </tr>
            <?php
                //Устанавливаем доступы к базе данных:
                $host     = 'localhost'; //имя хоста, на локальном компьютере это localhost
                $user     = 'root';      //имя пользователя, по умолчанию это root
                $password = 'mysql';     //пароль, по умолчанию пустой
                $db_name  = 'практика';  //имя базы данных

                //Соединяемся с базой данных используя наши доступы:
                $link = mysqli_connect($host, $user, $password, $db_name)
                    or die(mysqli_errno($link));

                //Устанавливаем кодировку (не обязательно, но поможет избежать проблем):
                mysqli_query($link, "SET NAMES 'utf8'");

                // Удаление по id (до получения!):
                if(isset($_GET['del'])) {
                    $del = $_GET['del'];
                    $query = "DELETE FROM workers WHERE id = $del";
                    mysqli_query($link, $query) or die(mysqli_error($link));
                }

                // Получение всех работников:
                $query = "SELECT * FROM workers"; // делаем запрос
                $result = mysqli_query($link, $query) or die(mysqli_error($link));
                for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
                
                // Вывод на экран:
                $result = '';
                foreach($data as $elem) {
                    $result .= '<tr>';
			
                    $result .= '<td>' . $elem['id'] . '</td>';
                    $result .= '<td>' . $elem['name'] . '</td>';
                    $result .= '<td>' . $elem['age'] . '</td>';
                    $result .= '<td>' . $elem['salary'] . '</td>';
                    $result .= '<td><a href="?del=' . $elem['id'] . '">удалить</a></td>';
                    
                    $result .= '</tr>';
                }

                echo $result;
            ?>

        </table>
    </body>
</html>