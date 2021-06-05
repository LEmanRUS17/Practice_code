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
    function input($type, $name, $value)
    {
        return '<input type="'.$type.'" name="'.$name.'" value="'.$value.'">';
    }
    
    echo input('text', 'input', '1');

?>