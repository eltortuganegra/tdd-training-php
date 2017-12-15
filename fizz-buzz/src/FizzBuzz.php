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
        $numbersList = $this->setValuesToPositions($numbersList);

        return $numbersList;
    }

    protected function initializeNumbersList()
    {
        $numbersList = array_fill(self::INITIAL_INDEX, self::DEFAULT_SIZE, self::DEFAULT_VALUE);

        return $numbersList;
    }

    protected function setValuesToPositions($numbersList)
    {
        foreach ($numbersList as $index => $value) {
            $position = $this->getPositionForIndex($index);
            $numbersList[$index] = $position;

            if ($this->isMultipleOfThree($position)) {
                $numbersList[$index] = 'Fizz';
            }
        }

        return $numbersList;
    }

    protected function getPositionForIndex($index)
    {
        return $index + 1;
    }

    protected function isMultipleOfThree($position)
    {
        return $position % 3 == 0;
    }

}
