<?php
    $a = mktime(7, 23, 48, 5, 15, 2020);
    $b = mktime();
    $result = ($b - $a) / 60 / 60;
    echo round($result);
?>
