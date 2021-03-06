<?php

include __DIR__ . '/../src/FizzBuzz.php';

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
    protected $fizzbuzz;

    public function setUp()
    {
        $this->fizzbuzz = new FizzBuzz();
    }

    public function test_put_1_say_1()
    {
        $expected = "1";
        $actual = $this->fizzbuzz->say(1);
        $this->assertEquals($expected, $actual, "Put 1 but not say 1");
    }

    public function test_put_2_say_2()
    {
        $expected = "2";
        $actual = $this->fizzbuzz->say(2);
        $this->assertEquals($expected, $actual, "Put 2 but not say 2");
    }

    public function test_put_3_say_fizz()
    {
        $expected = "Fizz";
        $actual = $this->fizzbuzz->say(3);
        $this->assertEquals($expected, $actual, "Put 3 but not say Fizz");
    }

    public function test_put_5_say_Buzz()
    {
        $expected = "Buzz";
        $actual = $this->fizzbuzz->say(5);
        $this->assertEquals($expected, $actual, "Put 5 but not say Buzz");
    }

    public function test_put_6_say_fizz()
    {
        $expected = "Fizz";
        $actual = $this->fizzbuzz->say(6);
        $this->assertEquals($expected, $actual, "Put 6 but not say Fizz");
    }

    public function test_put_9_say_fizz()
    {
        $expected = "Fizz";
        $actual = $this->fizzbuzz->say(9);
        $this->assertEquals($expected, $actual, "Put 9 but not say Fizz");
    }

    public function test_put_10_say_Buzz()
    {
        $expected = "Buzz";
        $actual = $this->fizzbuzz->say(10);
        $this->assertEquals($expected, $actual, "Put 10 but not say Buzz");
    }

    public function test_put_15_say_FizzBuzz()
    {
        $expected = "FizzBuzz";
        $actual = $this->fizzbuzz->say(15);
        $this->assertEquals($expected, $actual, "Put 15 but not say FizzBuzz");
    }

    public function test_put_30_say_FizzBuzz()
    {
        $expected = "FizzBuzz";
        $actual = $this->fizzbuzz->say(30);
        $this->assertEquals($expected, $actual, "Put 30 but not say FizzBuzz");
    }
}
