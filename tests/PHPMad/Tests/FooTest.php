<?php

namespace PHPMad\Tests;

use PHPMad\Foo;

class FooTest extends TestCase
{

    public function testNormalNumbers()
    {
        $foo = new Foo();
        $this->assertEquals(1, $foo->bar(1));
    }

    function testFizz()
    {
        $foo = new Foo();
        $this->assertEquals('Fizz', $foo->bar(3), "must be Fizz");
    }

}
