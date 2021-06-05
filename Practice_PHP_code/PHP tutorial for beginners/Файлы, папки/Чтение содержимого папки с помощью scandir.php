<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 'on');

    $files = scandir('dir'); // запись в $file массив содержимого папки
    var_dump($files);

    //$files = array_diff(scandir('dir'), ['..', '.']); // запись в $file массив содержимого папки игнорируя '..' и  '.'
    //var_dump($files);
?>