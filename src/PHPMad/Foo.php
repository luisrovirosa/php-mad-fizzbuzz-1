<?php

namespace PHPMad;

class Foo
{

    public function bar($value)
    {
        if ($value % 3 == 0) {
            return 'Fizz';
        }
        return $value;
    }

}
