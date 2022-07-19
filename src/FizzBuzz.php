<?php

namespace App;

class FizzBuzz{
    public function isDivisible(int $numb) : String {
        

        if ($numb % 3 != 0 && $numb % 5 != 0){
            return $numb;
        }

        if ($numb % 3 === 0 && $numb % 5 === 0){
            return "FizzBuzz";
        }

        if ($numb % 3 === 0){
            return "Fizz";
        }

        if ($numb % 5 === 0){
            return "Buzz";
        }
        
    }

    
}

?>
