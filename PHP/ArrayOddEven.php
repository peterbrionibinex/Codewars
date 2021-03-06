<?php

  /*
      
      Problem Name: Odd or Even?
      Problem Description:
      
        Given an array of numbers, determine whether the sum of all of the numbers is odd or even.

        Give your answer in string format as 'odd' or 'even'.

        If the input array is empty consider it as: [0] (array with a zero).
        
      Rank: 7kyu
      Author: Peter Joshua Brion
  
  */

  function odd_or_even(array $a): string {
    $sum=0;
    foreach($a as $key=>$value)
      $sum+=$value;
    return $sum%2==0? "even":"odd";
  }

