<html>
	<head>
		<meta charset="utf-8">
        <title>PHP</title>
    </head>
	<body>
        <p></p>
        <form action="" method="GET">
            <input type="text" name="num">
            <br>
            <input type="submit">
        </form>
    </body>
</html>

<?php
    $num = $_REQUEST['num'];

    for($i = 1; $i < $num; $i++) {
        if($num % $i == 0) {
            echo $i.'<br>';
        }
    }
?>
