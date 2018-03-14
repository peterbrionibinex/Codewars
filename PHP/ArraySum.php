<?php
	
	function sum(array $a): float {
	    $sum = 0;
	    foreach($a as $key=>$value)
	      $sum += $value;
	    return $sum;
	}