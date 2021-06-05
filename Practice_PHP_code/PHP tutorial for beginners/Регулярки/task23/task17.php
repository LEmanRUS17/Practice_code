<?php
    $str = 'wйw wяw wёw wqw';
    echo $str.'<br>';	
    echo preg_replace('#w[а-яА-ЯЁё]w#u', '!', $str);
?>