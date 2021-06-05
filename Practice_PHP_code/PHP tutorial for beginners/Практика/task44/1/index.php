<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">  
		<title>Гостевая книга</title>
		<link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="css/styles.css">
		<?php
			// Устанавливаем доступы к базе данных:
            $host     = 'localhost';      // имя хоста, на локальном компьютере это localhost
            $user     = 'root';           // имя пользователя, по умолчанию это root
            $password = 'mysql';          // пароль, по умолчанию пустой
            $db_name  = 'гостевая книга'; // имя базы данных

            // Соединяемся с базой данных используя наши доступы:
            $link = mysqli_connect($host, $user, $password, $db_name);

            // Устанавливаем кодировку (не обязательно, но поможет избежать проблем):
			mysqli_query($link, "SET NAMES 'utf8'");
		?>
	</head>
	<body>
		<div id="wrapper">
			<h1>Гостевая книга</h1>
			<?php
                // Получение списка сообщений:
                $query = "SELECT * FROM книга ORDER BY date DESC"; // запрос в БД для получения списка с сортивовкой по дате
                // Делаем запрос к БД, результат запроса пишем в $result:
                $result = mysqli_query($link, $query) or die( mysqli_error($link) );
                // Преобразуем то, что отдала нам база в нормальный массив PHP $data:
                for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

                $result = '';

                foreach ($data as $elem) { // формируем облость сообщения
                    $result .= '<div class="note">';
                    $result .= '<p><span class="date">' . $elem['date'] . '</span>';
                    $result .= '<span class="name">'    . $elem['name'] . '</span></p>';
                    $result .= '<p class="text">'       . $elem['text'] . '</p></div>';
                }

                echo $result; // вывод облости сообщения
			?>

			<!--<div class="info alert alert-info">
				Запись успешно сохранена!
			</div> -->

			<div id="form"> 
				<form action="" method="POST" name="test">  <!-- Форма для отправки сообщения -->
					<p><input    class="form-control" placeholder="Ваше имя"  name="name"></p>
					<p><textarea class="form-control" placeholder="Ваш отзыв" name="text"></textarea></p>
					<p><input type="submit" class="btn btn-info btn-block" value="Сохранить"></p>
				<?php
					// Сохранение нового (до получения!):
					if(!empty($_POST['name']) && !empty($_POST['text'])) {
						$name = $_POST['name'];
						$text = $_POST['text'];
		
						// Запрос на добавление сообщения в БД
						$query = "INSERT INTO книга SET name = '$name', text = '$text'";
						mysqli_query($link, $query) or die(mysqli_error($link));
						
						header('Location:#');
						exit;
					}
				?>
				</form>
            </div>
		</div>
	</body>
</html>