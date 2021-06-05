<?php
    echo cut('qwertyuiopasdfg');
    
    function cut($str, $num=10) {
        return substr($str, 0, $num);
    }
?>