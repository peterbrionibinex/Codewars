<?php

function solution($number)
{
    if (!is_int($number) || $number < 1) return false; // ignore negative numbers and zero
 
	$integers = array(900, 500,  400, 100,   90,  50,   40,  10,    9,   5,    4,   1);
	$numerals = array('CM', 'D', 'CD', 'C', 'XC', 'L', 'XL', 'X', 'IX', 'V', 'IV', 'I');
	$major = intval($number / 1000) * 1000;
	$minor = $number - $major;
	$numeral = $leastSig = '';
 
	for ($i = 0; $i < sizeof($integers); $i++) {
		while ($minor >= $integers[$i]) {
			$leastSig .= $numerals[$i];
			$minor  -= $integers[$i];
		}
	}
 
	if ($number >= 1000 && $number < 40000) {
		while ($major >= 1000) {
			$numeral .= 'M';
			$major -= 1000;
		}
	}
 
	else if ($number >= 40000) {
		$major = $major/1000;
		$numeral .= solution($major);
	}
 
	return $numeral . $leastSig;
}