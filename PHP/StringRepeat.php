<?php
    
    /*
        2nd problem that I solved in Codewars.
        
        Problem Name: String repeat
        Problem Description: 
          Write a function called repeatStr which repeats the given string string exactly n times.

          repeatStr(6, "I") // "IIIIII"
          repeatStr(5, "Hello") // "HelloHelloHelloHelloHello"
        Rank: 8kyu
        Date solved: March 7
        Author: Peter Joshua Brion
    
    */

    function repeatStr($n, $str)
    {
      return str_repeat($str,$n);

    }

    repeatStr(6, hello); // returns hellohellohellohellohellohello