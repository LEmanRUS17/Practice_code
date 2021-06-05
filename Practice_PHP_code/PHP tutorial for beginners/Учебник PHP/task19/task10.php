<html>
	<head>
		<meta charset="utf-8">
        <title>PHP</title>
    </head>
	<body>
        <form action="" method="GET">

        </form>
    </body>
</html>

<?php
	function input($name)
	{
		if(isset($_REQUEST[$name]) and $_REQUEST[$name] == 1) {
			$value = 'checked';
		} else {
			$value = '';
		}
		return '<input type="hidden" name="'.$name.'" value="0">
		<input type="checkbox" name="'.$name.'" value="1" '.$value.'>';
	}
	echo input('checkbox');
?>