<?php

namespace PHPMad;

class FizzBuzz
{

    public function fizzBuzzValue($value)
    {
        if ($value % 15 == 0) {
            return 'FizzBuzz';
        } else if ($value % 3 == 0) {
            return 'Fizz';
        } elseif ($value % 5 == 0) {
            return 'Buzz';
        }

        return $value;
    }

    public function fizzBuzz()
    {
        $array = [];
        for ($index = 0; $index < 100; $index++) {
            $array[] = $this->fizzBuzzValue($index + 1);
        }

        return $array;
    }

}
