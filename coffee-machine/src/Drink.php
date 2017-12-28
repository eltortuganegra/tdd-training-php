<?php

namespace CoffeeMachine;

class Drink
{
    protected $code = null;
    protected $sugar = 0;
    protected $drinkType;

    public function getCode()
    {
        return $this->code;
    }

    public function addSugar()
    {
        $this->sugar++;
    }

    public function getSugar()
    {
        return $this->sugar;
    }

    public function getDrinkType()
    {
        return $this->drinkType;
    }

    public function setDrinkType(DrinkType $drinkType)
    {
        $this->drinkType = $drinkType;
    }
}