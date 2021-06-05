<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset="utf-8">
		<title>PHP database</title>
	</head>
	<body>
        <table>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>age</th>
                <th>salary</th>
            </tr>

            <?php
                //Устанавливаем доступы к базе данных:
                $host     = 'localhost'; //имя хоста, на локальном компьютере это localhost
                $user     = 'root';      //имя пользователя, по умолчанию это root
                $password = 'mysql';     //пароль, по умолчанию пустой
                $db_name  = 'test';      //имя базы данных

                //Соединяемся с базой данных используя наши доступы:
                $link = mysqli_connect($host, $user, $password, $db_name);

                //Устанавливаем кодировку (не обязательно, но поможет избежать проблем):
                mysqli_query($link, "SET NAMES 'utf8'");

                $query = "SELECT * FROM workera"; // делаем запрос
                $result = mysqli_query($link, $query) or die(mysqli_error($link));
                for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
                var_dump($data); 
            ?>

        </table>
    </body>
</html>