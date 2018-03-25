<?php

namespace homework\FizzBuzz;

class FizzBuzz
{
    public function gameLogic($number)
    {
        if($number % 3 == 0 && $number % 5 == 0)
        {
            $result = 'fizzbuzz';
        }

        else if($number % 3 == 0)
        {
            $result = 'fizz';
        }

        else if($number % 5 == 0)
        {
            $result = 'buzz';
        }

        else
        {
            $result = $number;
        }

        return $result;
    }
}