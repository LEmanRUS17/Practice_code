<html>
	<head>
		<meta charset="utf-8">
        <title>PHP</title>
    </head>
	<body>
        <p></p>
        <form action="" method="GET">
            <input type="text" name="text">
            <br>
            <input type="submit">
        </form>
    </body>
</html>

<?php
    $num = $_REQUEST['text'];
    
    for($i = 1; $i <= $num; $i++) {
        static $result = 1;
        $result *= $i;
    }

    echo $result;
?>
