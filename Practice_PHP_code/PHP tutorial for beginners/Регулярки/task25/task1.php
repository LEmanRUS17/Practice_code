<?php
    $str = 'baaa caaa faaa baaaaa';
    echo $str.'<br>';	
    echo preg_replace('#(?<=b)a+#', '!',$str);
?>