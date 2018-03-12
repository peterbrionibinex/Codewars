<?php

    /*
        Problem Name: Sum of positive
        Problem Description:
          
          You get an array of numbers, return the sum of all of the positives ones.

          Example [1,-4,7,12] => 1 + 7 + 12 = 20

          Note: array may be empty, in this case return 0.
        Rank: 8kyu
        Date Solved: March 7, 2018
        Autor: Peter Joshua Brion
    */

    function positive_sum($arr) {
      $sum = 0;
      if(empty($arr))
        return 0;
      else
        foreach($arr as $key =>$value)
          if($value>0)
            $sum+=$value;
        return $sum;
    }

  positive_sum([1,-4,7,12]); // returns 20