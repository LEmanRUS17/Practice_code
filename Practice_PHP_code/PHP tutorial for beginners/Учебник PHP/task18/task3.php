<?php
    function lowNum($num)
	{
		$result = array_sum($arr);
		if ($resullt > 9) {
			$result = lowNum($result);
		}
		return $result;
	}
?>