<html>
	<head>
		<meta charset="utf-8">
        <title>PHP</title>
    </head>
	<body>
        <form action="" method="GET">
            <p>В какой стране вы живёте</p>
            <select name="country">
                <option disabled>Выберите страну</option>
                <option>Россия</option>
                <option>Чехия</option>
                <option>Малдовия</option>
                <option>Италия</option>
            </select>
            <input type="submit">
            <br>
            <a href="task4_test.php">test</a>
        </form>
    </body>
</html>
<?php
    session_start();
    $_SESSION['country'] = $_GET['country'];
?>