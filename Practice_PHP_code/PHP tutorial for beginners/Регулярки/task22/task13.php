<?php
    $str = '*+ *q+ *qq+ *qqq+ *qqq qqq+';
    echo $str.'<br>';
    echo preg_replace('#\*q*\+#', '!', $str);
?>