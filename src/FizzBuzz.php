<?php

class FizzBuzz
{
    public function say($number)
    {
        $output = $number;
        if ($number % 3 === 0 && $number % 5 === 0) {
            $output = "FizzBuzz";
        } else if ($number % 3 === 0) {
            $output = "Fizz";
        } else if ($number % 5 === 0) {
            $output = "Buzz";
        }
        return $output;
    }
}
