<?php

namespace CoffeeMachine;

class CoffeeMachine
{
    private $drinkType = null;

    public function getCommand()
    {
        return $this->drinkType . '::';
    }

    public function pressCoffeeButton()
    {
        $this->drinkType = 'C';
    }

    public function pressTeaButton()
    {
        $this->drinkType = 'T';
    }

    public function pressChocolateButton()
    {
        $this->drinkType = 'H';
    }

}