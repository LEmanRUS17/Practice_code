<?php
    echo numberToNoun(1, 'яблоко', 'яблока', 'яблок');

    function numberToNoun($num, $only, $plural, $more) {
        $number = substr($num, -1);
        if($number == 1) {
            return $num.' '.$only;
        } elseif($number > 1 && $number < 5) {
            return $num.' '.$plural;
        } else {
            return $num.' '.$more;
        }
        
    }
?>