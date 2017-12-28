<?php

namespace CoffeeMachine;

class CommandMachine
{
    const DEFAULT_CODE_FOR_NOT_SUGAR = '';
    const DEFAULT_CODE_FOR_NOT_STICK = '';
    const DEFAULT_CODE_FOR_STICK = '0';

    public function getCommand(Drink $drink)
    {
        $drinkCode = $this->getDrinkCode($drink);
        $sugarCode = $this->getSugarCode($drink);
        $stickCode = $this->getStickCode($drink);

        return  $drinkCode . ':' . $sugarCode . ':' . $stickCode;
    }

    protected function getDrinkCode(Drink $drink)
    {
        $drinkCode = $drink->getDrinkType()->getCode();

        return $drinkCode;
    }

    protected function getSugarCode(Drink $drink)
    {
        $sugarCode = $this->hasDrinkZeroSugar($drink)
            ? self::DEFAULT_CODE_FOR_NOT_SUGAR
            : $drink->getSugar();

        return $sugarCode;
    }

    protected function getStickCode(Drink $drink)
    {
        $stickCode = $this->hasDrinkZeroSugar($drink)
            ? self::DEFAULT_CODE_FOR_NOT_STICK
            : self::DEFAULT_CODE_FOR_STICK;

        return $stickCode;
    }

    protected function hasDrinkZeroSugar(Drink $drink)
    {
        return ($drink->getSugar() == 0);
    }
}