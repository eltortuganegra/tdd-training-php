<?php

namespace CoffeeMachine;

class CoffeeMachine
{
    private $drinkCode = null;
    private $sugarCode = '';
    private $stickCode = '';
    private $amountSugar = 0;

    public function getCommand()
    {
        return $this->drinkCode . ':' . $this->sugarCode . ':' . $this->stickCode;
    }

    public function pressCoffeeButton()
    {
        $this->drinkCode = 'C';
    }

    public function pressTeaButton()
    {
        $this->drinkCode = 'T';
    }

    public function pressChocolateButton()
    {
        $this->drinkCode = 'H';
    }

    public function addSugar()
    {
        $this->amountSugar++;
        $this->sugarCode = $this->amountSugar;
//        $this->stickCode = '0';
    }

}