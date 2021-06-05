<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 'on');

    /*
    getFiles('dir');

    function getFiles($dir) { // перебрать файлы в папке и подпапках 
        $files = array_diff(scandir($dir), ['..', '.']);

        foreach ($files as $file) {
            $path = $dir . '/' . $file;

            if (is_dir($path)) {
                getFiles($path);
            } else {
                var_dump($path);
            }
        }
    }
*/
  
    var_dump(getFiles('dir'));

    function getFiles($dir) { // записать в массив файлы в папке и подпапках
        $files = array_diff(scandir($dir), ['..', '.']);
        $result = [];

        foreach ($files as $file) {
            $path = $dir . '/' . $file;

            if (is_dir($path)) {
                $result = array_merge($result, getFiles($path));
            } else {
                $result[] = $path;
            }
        }

        return $result;
    }
  
?>