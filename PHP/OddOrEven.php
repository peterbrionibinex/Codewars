<?php

  /*
      Problem Name: Even or Odd
      Problem Description: 
      
         Create a function that takes an integer as an argument and returns "Even" for even numbers 
         or "Odd" for odd numbers.
      
      Rank: 8kyu
      Date solved: March 7
      Author: Peter Joshua Brion
  */

  function even_or_odd(int $n): string {
      return $n%2==0? "Even":"Odd";
  }

  even_or_odd(7); //returns Odd
  even_or_odd(4); //returns Even