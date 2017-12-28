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

    public function isThereEnoughMoney(Drink $drink)
    {
        if ($this->isDrinkACoffee($drink)) {

            return ($this->money >= self::COFFEE_PRICE);
        } elseif ($this->isDrinkATea($drink)) {

            return ($this->money >= self::TEA_PRICE);
        }

        return ($this->money >= self::CHOCOLATE_PRICE);
    }

    public function getMissingMoneyMessage($drink)
    {
        if ($this->isDrinkACoffee($drink)) {
            $missingMoney = self::COFFEE_PRICE - $this->money;
        } elseif ($this->isDrinkATea($drink)) {
            $missingMoney = self::TEA_PRICE - $this->money;
        } else {
            $missingMoney = self::CHOCOLATE_PRICE - $this->money;
        }

        return 'M:Money missing: ' . $missingMoney;
    }

    protected function isDrinkACoffee(Drink $drink)
    {
        $drinkType = $drink->getDrinkType();

        return $drinkType instanceof DrinkTypeCoffee;
//        return is_a($drink, 'CoffeeMachine\CoffeeDrink');
    }

    protected function isDrinkATea(Drink $drink)
    {
        $drinkType = $drink->getDrinkType();

        return $drinkType instanceof DrinkTypeTea;
//        return is_a($drink, 'CoffeeMachine\TeaDrink');
    }

}