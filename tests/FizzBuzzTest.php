<?php

namespace Tests;

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase {
    public function test_is_divisible_by_3_and_return_Fizz(){

        //Given - Escenario
        $fizzBuzz = new FizzBuzz;

        //When - Action
        $result =  $fizzBuzz->isDivisible(3);

        //Then 
        $this->assertEquals("Fizz",$result);
    }

    public function test_is_divisible_by_5_and_return_Buzz(){

        //Given - Escenario
        $fizzBuzz = new FizzBuzz;

        //When - Action
        $result =  $fizzBuzz->isDivisible(5);

        //Then 
        $this->assertEquals("Buzz",$result);
    }

    public function test_is_divisible_by_3_and_5_and_return_FizzBuzz(){

        //Given - Escenario
        $fizzBuzz = new FizzBuzz;

        //When - Action
        $result =  $fizzBuzz->isDivisible(15);

        //Then 
        $this->assertEquals("FizzBuzz",$result);
    }

    public function test_not_divisible_by_3_and_5_and_return_number(){

        //Given - Escenario
        $fizzBuzz = new FizzBuzz;

        //When - Action
        $result =  $fizzBuzz->isDivisible(7);

        //Then 
        $this->assertEquals(7,$result);
    }

    public function test_divisible_by_3_or_contain_3(){

        //Given - Escenario
        $fizzBuzz = new FizzBuzz;

        //When - Action
        $result =  $fizzBuzz->isDivisible(3);

        //Then 
        $this->assertEquals("Fizz",$result);
    }
    
    
}