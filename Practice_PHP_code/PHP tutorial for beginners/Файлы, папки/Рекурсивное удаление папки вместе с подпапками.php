<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 'on');

    //rmdir('dir');

    removeDir('dir');

    function removeDir($dir) {
        $files = array_diff(scandir($dir), ['..', '.']);

        foreach ($files as $file) {
            $path = $dir . '/' . $file;

            if (is_dir($path)) {
                removeDir($path);
            } else {
                unlink($path);
            }
        }

        rmdir($dir);
    }
?>