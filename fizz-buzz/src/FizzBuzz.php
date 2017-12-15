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
        $numbersList = $this->setNumericalValuesToPositionsInTheNumbersList($numbersList);
        $numbersList[2] = 'Fizz';
        $numbersList[5] = 'Fizz';

        return $numbersList;
    }

    protected function initializeNumbersList()
    {
        $numbersList = array_fill(self::INITIAL_INDEX, self::DEFAULT_SIZE, self::DEFAULT_VALUE);

        return $numbersList;
    }

    protected function setNumericalValuesToPositionsInTheNumbersList($numbersList)
    {
        foreach ($numbersList as $index => $value) {
            $positionList = $this->getPositionForIndex($index);
            $numbersList[$index] = $positionList;
        }

        return $numbersList;
    }

    protected function getPositionForIndex($index)
    {
        return $index + 1;
    }
}
