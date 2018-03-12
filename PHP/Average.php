<?php

  /*
    
    Problem Name: Calculate average
    Problem Description:
      
      Write function avg which calculates average of numbers in given list.
    
    Rank: 8kyu
    Author: Peter Joshua Brion
  
  */

  
  function find_average($array) {
    return array_sum($array)/count($array);
  }