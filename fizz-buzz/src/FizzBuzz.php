<?php

namespace FizzBuzz;

class FizzBuzz
{
    const INITIAL_INDEX = 0;
    const DEFAULT_SIZE = 100;
    const DEFAULT_VALUE = null;

    public function getNumbersList()
    {
        $numberList = array_fill(self::INITIAL_INDEX, self::DEFAULT_SIZE, self::DEFAULT_VALUE);

        return $numberList;
    }
}
