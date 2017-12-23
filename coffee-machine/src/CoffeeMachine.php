<?php

namespace CoffeeMachine;

class CoffeeMachine
{
    protected $amountMoney = 0;
    protected $drinkCode = null;
    protected $sugarCode = '';
    protected $stickCode = '';
    protected $amountSugar = 0;

    public function getCommand()
    {
        if ($this->amountMoney < 0.6) {
            return 'M:Money missing: 0.6';
        }

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
        $this->stickCode = '0';
    }

    public function insertMoney($amountMoney)
    {
        $this->amountMoney = $amountMoney;
    }

}