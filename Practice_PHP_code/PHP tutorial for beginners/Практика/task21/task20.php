<html>
	<head>
		<meta charset="utf-8">
        <title>PHP</title>
    </head>
	<body>

    </body>
</html>

<?php
    echo analogUcfirst('qwe');

    function analogUcfirst($str) {
        $fc = strtoupper(substr($str, 0, 1));
        return $fc.substr($str, 1);
    }
?>