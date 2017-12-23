<?php

namespace CoffeeMachine;

class CoffeeMachine
{
    protected $amountMoney = 0;
    protected $drinkCode = null;
    protected $sugarCode = '';
    protected $stickCode = '';
    protected $amountSugar = 0;

    const COFFEE_PRIZE = 0.6;
    const COFFEE_TEA = 0.4;
    const COFFEE_CHOCOLATE = 0.5;

    public function getCommand()
    {
        if ($this->isThereEnoughMoney()) {
            return $this->getMissingMoneyMessage();
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

    protected function isThereEnoughMoney()
    {
        if ($this->drinkCode == 'C') {

            return $this->amountMoney < self::COFFEE_PRIZE;
        } elseif ($this->drinkCode == 'T') {

            return $this->amountMoney < self::COFFEE_TEA;
        }

        return $this->amountMoney < self::COFFEE_CHOCOLATE;
    }

    protected function getMissingMoneyMessage()
    {
        if ($this->drinkCode == 'C') {
            $missingMoney = self::COFFEE_PRIZE - $this->amountMoney;
        } elseif ($this->drinkCode == 'T') {
            $missingMoney = self::COFFEE_TEA - $this->amountMoney;
        } else {
            $missingMoney = self::COFFEE_CHOCOLATE - $this->amountMoney;
        }

        return 'M:Money missing: ' . $missingMoney;
    }

}