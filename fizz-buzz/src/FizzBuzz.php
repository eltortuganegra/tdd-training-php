<?php

namespace FizzBuzz;

class FizzBuzz
{
    const INITIAL_INDEX = 0;
    const DEFAULT_SIZE = 100;
    const DEFAULT_VALUE = null;
    const FIZZ_VALUE = 'Fizz';
    const BUZZ_VALUE = 'Buzz';
    const FIZZBUZZ_VALUE = 'FizzBuzz';

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

            $stringPosition = (string)$position;
            if ($this->hasPositionAFiveNumber($stringPosition)) {
                $numbersList = $this->setBuzzValue($numbersList, $index);

                continue;
            }

            if ($this->hasPositionAThreeNumber($stringPosition)) {
                $numbersList = $this->setFizzValue($numbersList, $index);

                continue;
            }

            if ($this->isMultipleOfThreeAndFive($position)) {
                $numbersList = $this->setFizzBuzzValue($numbersList, $index);

                continue;
            }
            if ($this->isMultipleOfFive($position)) {
                $numbersList = $this->setBuzzValue($numbersList, $index);

                continue;
            }
            if ($this->isMultipleOfThree($position)) {
                $numbersList = $this->setFizzValue($numbersList, $index);

                continue;
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
        $numbersList[$index] = self::FIZZ_VALUE;

        return $numbersList;
    }

    protected function isMultipleOfFive($position)
    {
        return $position % 5 == 0;
    }

    protected function setBuzzValue($numbersList, $index)
    {
        $numbersList[$index] = self::BUZZ_VALUE;

        return $numbersList;
    }

    protected function setFizzBuzzValue($numbersList, $index)
    {
        $numbersList[$index] = self::FIZZBUZZ_VALUE;

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

    /**
     * @param $stringPosition
     * @return bool
     */
    protected function hasPositionAThreeNumber($stringPosition)
    {
        return strpos($stringPosition, '3') !== false;
    }

    /**
     * @param $stringPosition
     * @return bool
     */
    protected function hasPositionAFiveNumber($stringPosition)
    {
        return strpos($stringPosition, '5') !== false;
    }

}
