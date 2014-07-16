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

}
