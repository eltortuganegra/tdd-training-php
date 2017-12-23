<?php

namespace CoffeeMachine;

class MoneyMachine
{
    protected $money = null;

    const COFFEE_PRICE = 0.6;
    const TEA_PRICE = 0.4;
    const CHOCOLATE_PRICE = 0.5;

    public function insertMoney($money)
    {
        $this->money = $money;
    }

    public function isThereEnoughMoney(DrinkInterface $drink)
    {
        if (is_a($drink, 'CoffeeMachine\CoffeeDrink')) {

            return ($this->money >= self::COFFEE_PRICE);
        } elseif (is_a($drink, 'CoffeeMachine\TeaDrink')) {

            return ($this->money >= self::TEA_PRICE);
        }

        return ($this->money >= self::CHOCOLATE_PRICE);
    }

}