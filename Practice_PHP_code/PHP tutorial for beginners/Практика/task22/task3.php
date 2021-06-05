<html>
	<head>
		<meta charset="utf-8">
        <title>PHP</title>
    </head>
	<body>
        <form action="" method="GET">
            <input type="text" name="date">
            <input type="submit">
        </form>
    </body>
</html>

<?php
    $date = $_REQUEST['date'];
    $str = implode(', ', explode('.', $date));
    echo $str.'<br>';
?>