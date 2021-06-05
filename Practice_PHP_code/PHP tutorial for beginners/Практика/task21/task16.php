<html>
	<head>
		<meta charset="utf-8">
        <title>PHP</title>
    </head>
	<body>

    </body>
</html>

<?php
    $arr = [1, 2, 3, 40, 5, 60, 7, 8, 1, 1];
    
    foreach($arr as $elem1) {
        $num = 0;
        
        foreach($arr as $elem2) {
            if($elem1 == $elem2)
                $num++;
        }

        if($num >= 3)   {
            echo 'Yes';
            break;
        }
    }
?>