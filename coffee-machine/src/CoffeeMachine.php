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
        if ($this->isThereEnoughMoney()) {
            return $this->getMoneyMissingMessage();
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

    /**
     * @return bool
     */
    protected function isThereEnoughMoney()
    {
        if ($this->drinkCode == 'C') {

            return $this->amountMoney < 0.6;
        } elseif ($this->drinkCode == 'T') {

            return $this->amountMoney < 0.4;
        }

        return $this->amountMoney < 0.5;
    }

    /**
     * @return string
     */
    protected function getMoneyMissingMessage()
    {
        if ($this->drinkCode == 'C') {
            $missingMoney = 0.6 - $this->amountMoney;
        } elseif ($this->drinkCode == 'T') {
            $missingMoney = 0.4 - $this->amountMoney;
        } else {
            $missingMoney = 0.5 - $this->amountMoney;
        }

        return 'M:Money missing: ' . $missingMoney;
    }

}