<?php

	function camel_case(string $s): string {
	  $str = ucwords($s);
	  return str_replace(" ", '', $str);
	}