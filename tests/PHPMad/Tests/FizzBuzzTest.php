<?php

namespace PHPMad\Tests;

use PHPMad\FizzBuzz;

class FizzBuzzTest extends TestCase
{

    private $fizzBuzz;

    protected function setUp()
    {
        $this->fizzBuzz = new FizzBuzz();
    }

    public function testNormalNumbers()
    {
        $this->assertEquals(1, $this->fizzBuzz->bar(1));
    }

    function testFizz()
    {
        $this->assertEquals('Fizz', $this->fizzBuzz->bar(3), "must be Fizz");
    }

    function testBuzz()
    {
        $this->assertEquals('Buzz', $this->fizzBuzz->bar(5), "must be Buzz because is multiple of 5");
    }

    function testBuzzAndFizz()
    {
        $this->assertEquals('FizzBuzz', $this->fizzBuzz->bar(15), "must be Fizz and Buzz because is multiple of 3 and 5");
    }

    function testReturnsArrayOf100Values()
    {
        $this->assertInternalType('array', $this->fizzBuzz->fizzBuzz());
        $this->assertCount(100, $this->fizzBuzz->fizzBuzz());
    }

}
