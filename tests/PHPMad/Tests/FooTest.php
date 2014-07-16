<?php

namespace PHPMad\Tests;

use PHPMad\Foo;

class FooTest extends TestCase
{

    private $foo;

    protected function setUp()
    {
        $this->foo = new Foo();
    }

    public function testNormalNumbers()
    {
        $this->assertEquals(1, $this->foo->bar(1));
    }

    function testFizz()
    {
        $this->assertEquals('Fizz', $this->foo->bar(3), "must be Fizz");
    }

    function testBuzz()
    {
        $this->assertEquals('Buzz', $this->foo->bar(5), "must be Buzz because is multiple of 5");
    }

    function testBuzzAndFizz()
    {
        $this->assertEquals('FizzBuzz', $this->foo->bar(15), "must be Fizz and Buzz because is multiple of 3 and 5");
    }

}
