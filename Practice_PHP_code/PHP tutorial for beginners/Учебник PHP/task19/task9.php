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
		return '<input type="hidden" name="'.$name.'" value="0">
		<input type="checkbox" name="'.$name.'" value="1">';
	}
	echo input('checkbox');
?>