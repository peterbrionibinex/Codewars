<?php
	
	function reverse(array $a): array {
	  $stack= [];
	  for($i = sizeof($a)-1; $i>=0; $i--){
	    array_push($stack, $a[$i]);
	  }
	  return $stack;
	}