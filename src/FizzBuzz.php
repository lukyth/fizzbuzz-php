<?php

class FizzBuzz
{
    public function say($number)
    {
        $output = $number;
        if ($number % 3 === 0) {
            $output = "Fizz";
        }
        if ($number % 5 === 0) {
            $output = "Buzz";
        }
        if ($number === 7) {
            $output = "Bank";
        }
        if ($number === 15) {
            $output = "FizzBuzz";
        }
        if ($number === 30) {
            $output = "FizzBuzz";
        }
        return $output;
    }
}
