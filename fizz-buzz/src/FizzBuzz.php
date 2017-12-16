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
            $numbersList = $this->setNumericalValueForPosition($numbersList, $position, $index);

            if ($this->isMultipleOfThree($position)) {
                $numbersList = $this->setFizzValue($numbersList, $index);
            }
            if ($this->isMultipleOfFive($position)) {
                $numbersList = $this->setBuzzValue($numbersList, $index);
            }
            if ($this->isMultipleOfThreeAndFive($position)) {
                $numbersList = $this->setFizzBuzzValue($numbersList, $index);
            }

            $stringPosition = (string)$position;
            if (strpos($stringPosition, '3') !== false) {
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

    protected function setNumericalValueForPosition($numbersList, $position, $index)
    {
        $numbersList[$index] = $position;

        return $numbersList;
    }

    protected function setFizzValue($numbersList, $index)
    {
        $numbersList[$index] = 'Fizz';

        return $numbersList;
    }

    protected function isMultipleOfFive($position)
    {
        return $position % 5 == 0;
    }

    protected function setBuzzValue($numbersList, $index)
    {
        $numbersList[$index] = 'Buzz';

        return $numbersList;
    }

    protected function setFizzBuzzValue($numbersList, $index)
    {
        $numbersList[$index] = 'FizzBuzz';

        return $numbersList;
    }

    /**
     * @param $position
     * @return bool
     */
    protected function isMultipleOfThreeAndFive($position)
    {
        return ($position % 3 == 0) && ($position % 5 == 0);
    }

}
