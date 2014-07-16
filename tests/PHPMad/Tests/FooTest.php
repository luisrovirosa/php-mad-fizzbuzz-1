<?php

namespace PHPMad\Tests;

use PHPMad\Foo;

class FooTest extends TestCase
{

    function testFizz()
    {
        $foo = new Foo();
        $this->assertEquals('Fizz', $foo->bar(3), "must be Fizz");
    }

}
