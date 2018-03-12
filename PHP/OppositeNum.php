<?php 

  /*
      Problem Name: Opposite number
      Problem Description: 
        
        Very simple, given a number, find its opposite.

        Examples:

        1: -1
        14: -14
        -34: 34
      
      Rank: 8kyu
      Author: Peter Joshua Brion
      
  */

  function opposite($n) {
    return $n>0? -1*abs($n):abs($n);
  }

  opposite(-1); //returns 1
  opposite(1); //returns -1