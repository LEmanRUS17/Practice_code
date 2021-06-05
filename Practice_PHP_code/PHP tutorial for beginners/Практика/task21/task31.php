<html>
	<head>
		<meta charset="utf-8">
        <title>PHP</title>
    </head>
	<body>

    </body>
</html>

<?php
	function getArrUnique ($arr)
	{
		$result = [];
		foreach ($arr as $elem) {
			if (in_array($elem, $result) == false) {
				$result[] = $elem;
			}
		}
		return $result;
	}
?>