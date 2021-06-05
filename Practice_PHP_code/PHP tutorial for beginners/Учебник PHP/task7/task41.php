<?php
    $arr = array('<b>php</b>', '<i>html</i>');
    $result = array_map('strip_tags', $arr);
    var_dump($result);
?>