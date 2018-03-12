<?php 

  /*
      
      Problem Name: Difference Of Squares
      Problem Description:
      
        Find the difference between the sum of the squares of the first n natural numbers (1 <= n <= 100)
        and the square of their sum. For example, when n = 10:

        The square of the sum of the first ten natural numbers is:

        (1 + 2 + ... + 10)**2 = 55**2 = 3025

        The sum of the squares of first ten natural numbers is :

        1**2 + 2**2 + ... + 10**2 = 385

        Hence the difference between square of the sum of the first ten natural numbers 
        and the sum of the squares of those numbes is 3025 - 385 = 2640.
        
      Rank: 7kyu
      Author: Peter Joshua Brion
  */
  
  function difference_of_squares(int $n): int {
    $sum1=0;
    $sum2=0;
    $expSum = 0;
    for($i=0;$i<=$n;$i++)
      ($sum1+=$i);
    $expSum = $sum1**2;
    for($i=0;$i<=$n;$i++)
      $sum2+=$i**2;
    return $expSum -$sum2;

  }
  