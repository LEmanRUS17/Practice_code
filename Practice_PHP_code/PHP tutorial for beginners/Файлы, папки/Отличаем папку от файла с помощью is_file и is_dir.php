<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 'on');

    //$files = scandir('dir);
    //var_dump($filse);

    $files = array_diff(scandir('dir'), ['..', '.']);
    var_dump($files);

    foreach ($files as $file) {
        echo $file;
        var_dump(is_file('dir/', $file));
        var_dump(is_dir('dir/', $file));
    }
?>