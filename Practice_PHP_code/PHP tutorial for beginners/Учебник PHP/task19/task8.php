<html>
	<head>
		<meta charset="utf-8">
        <title>PHP</title>
    </head>
	<body>
        <form action="" method="GET">
        <input type="submit">
        </form>
    </body>
</html>

<?php
	function input($type, $name, $value)
	{
		if(isset($_REQUEST[$name])) {
			$value = $_REQUEST[$name];
		}

		return '<input type="text" name="'.$name.'" value="'.$value.'">';
	}
	echo input('text', 'input', '1');

?>