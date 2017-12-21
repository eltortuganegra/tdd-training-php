<?php

namespace CoffeeMachine;

class CoffeeMachine
{
    private $drinkType = null;
    private $amountSugar = 0;

    public function getCommand()
    {
        $stickCode = '';
        $sugarCode = '';

        if ($this->amountSugar > 0) {
            $sugarCode = $this->amountSugar;
            $stickCode = '0';
        }

        return $this->drinkType . ':' . $sugarCode . ':' . $stickCode;
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

    public function addSugar()
    {
        $this->amountSugar++;
    }

}