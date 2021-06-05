<html>
	<head>
		<meta charset="utf-8">
        <title>PHP</title>
    </head>
	<body>
        <form action="" method="GET">
            <input type="text"     name="name">
            <input type="checkbox" name="chec">
            <input type="submit">
        </form>
    </body>
</html>

<?php
    if (isset($_REQUEST['name']) && isset($_REQUEST['chec'])) {
        echo 'Приветствую '.$_REQUEST['name'];
    }
?>