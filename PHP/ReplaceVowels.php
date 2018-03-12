<?php 

    /*
      
      Problem Name: Exclamation marks series #11: Replace all vowel to exclamation mark in the sentence
      Problem Description:
        
        Replace all vowel to exclamation mark in the sentence. aeiouAEIOU is vowel.
        
        Examples:
        
        replace("Hi!") === "H!!"
        replace("!Hi! Hi!") === "!H!! H!!"
        replace("aeiou") === "!!!!!"
        replace("ABCDE") === "!BCD!"
        
      Rank: 8kyu
      Author: Peter Joshua Brion
    */

    function replace(string $s): string {
      $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
      return str_replace($vowels, "!", $s);
    }
    
    replace("aeiou"); // returns !!!!!