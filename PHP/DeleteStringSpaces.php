<?php

  /*
      Problem Name: Remove String Spaces
      Problem Description:
          Simple, remove the spaces from the string, then return the resultant string.
      Rank: 8kyu
      Author: Peter Joshua Brion
      Date Solved: March 7
  */

  function no_space(string $s): string {
    return str_replace(' ','',$s);
  }

  no_space("Peter Joshua Brion"); // returns PeterJoshuaBrion