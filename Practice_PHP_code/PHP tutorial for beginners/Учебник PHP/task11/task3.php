<?php
    function code($a, $b, $c)
    {
        $result = ($a - $b) / $c;
        return $result;
    }

    $result= code(10, 6, 2);
    echo $result;
?>
