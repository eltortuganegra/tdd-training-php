<?php

namespace CoffeeMachine;

class CoffeeMachine
{
    protected $moneyMachine = null;
    protected $amountMoney = 0;
    protected $sugarCode = '';
    protected $stickCode = '';
    protected $amountSugar = 0;
    protected $drink = null;

    public function __construct()
    {
        $this->moneyMachine = new MoneyMachine();
    }

    public function getCommand()
    {
        if ( ! $this->isThereEnoughMoney()) {
            return $this->getMissingMoneyMessage();
        }

        return $this->drink->getCode() . ':' . $this->sugarCode . ':' . $this->stickCode;
    }

    public function pressCoffeeButton()
    {
        $this->drink = new CoffeeDrink();
    }

    public function pressTeaButton()
    {
        $this->drink = new TeaDrink();
    }

    public function pressChocolateButton()
    {
        $this->drink = new ChocolateDrink();
    }

    public function addSugar()
    {
        $this->amountSugar++;
        $this->sugarCode = $this->amountSugar;
        $this->stickCode = '0';
    }

    public function insertMoney($amountMoney)
    {
        $this->moneyMachine->insertMoney($amountMoney);
    }

    protected function isThereEnoughMoney()
    {
        return $this->moneyMachine->isThereEnoughMoney($this->drink);
    }

    protected function getMissingMoneyMessage()
    {
        return $this->moneyMachine->getMissingMoneyMessage($this->drink);
    }

}