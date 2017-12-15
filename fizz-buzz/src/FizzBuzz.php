<?php

namespace FizzBuzz;

class FizzBuzz
{
    const INITIAL_INDEX = 0;
    const DEFAULT_SIZE = 100;
    const DEFAULT_VALUE = null;

    public function getNumbersList()
    {
        $numbersList = $this->initializeNumbersList();
        $numbersList = $this->setNumbersListWithNumericValues($numbersList);

        return $numbersList;
    }

    protected function initializeNumbersList()
    {
        $numbersList = array_fill(self::INITIAL_INDEX, self::DEFAULT_SIZE, self::DEFAULT_VALUE);

        return $numbersList;
    }

    protected function setNumbersListWithNumericValues($numbersList)
    {
        foreach ($numbersList as $index => $value) {
            $numbersList[$index] = $index + 1;
        }

        return $numbersList;
    }
}
