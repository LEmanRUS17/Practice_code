<?php
    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
	last($arr);

	function last($arr)
	{
		echo array_pop($arr).'<br>'; //выводим последний элемент массива
    
		if(!empty($arr)) {
			last($arr); //это рекурсия
		}
	}
?>