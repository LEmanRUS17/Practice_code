<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset="utf-8">
		<title>PHP database</title>
	</head>
	<body>
        <a href="index.php">Список сотрудников</a>
        <form action="" method="POST">
            <span>Имя:</span>    <?php echo input('name'); ?>  <br>
            <span>Возраст</span> <?php echo input('age'); ?>   <br>
            <span>Зарплата</span><?php echo input('salary'); ?><br>
            <input type = "submit" value = "Добавить работника">
        </form>
            <?php 
                // Устанавливаем доступы к базе данных:
                $host     = 'localhost'; // имя хоста, на локальном компьютере это localhost
                $user     = 'root';      // имя пользователя, по умолчанию это root
                $password = 'mysql';     // пароль, по умолчанию пустой
                $db_name  = 'database';  // имя базы данных

                // Соединяемся с базой данных используя наши доступы:
                $link = mysqli_connect($host, $user, $password, $db_name);

                // Устанавливаем кодировку (не обязательно, но поможет избежать проблем):
                mysqli_query($link, "SET NAMES 'utf8'");

                function input($name) {
                    if (isset($_POST[$name])) {
                        $value = $_POST[$name];
                    } else {
                        $value = '';
                    }
    
                    return '<input name="' . $name . '" value = "' . $value . '">';
                }
    
                // Сохранение нового (до получения!):
                if(!empty($_POST)) {
                    $name   = $_POST['name'];
                    $age    = $_POST['age'];
                    $salary = $_POST['salary'];
    
                    $query = "INSERT INTO workers SET name = '$name', age = '$age', salary = '$salary'";
                    mysqli_query($link, $query) or die(mysqli_error($link));
                }
            ?>
        

            
    </body>
</html>