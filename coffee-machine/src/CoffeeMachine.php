<?php

namespace CoffeeMachine;

class CoffeeMachine
{
    protected $moneyMachine = null;
    protected $amountMoney = 0;
    protected $sugarCode = '';
    protected $stickCode = '';
    protected $drink = null;

    public function __construct()
    {
        $this->moneyMachine = new MoneyMachine();
        $this->drink = new Drink();
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
        $this->drink = DrinkFactory::createCoffee();
    }

    public function pressTeaButton()
    {
        $this->drink = DrinkFactory::createTea();
    }

    public function pressChocolateButton()
    {
        $this->drink = DrinkFactory::createChocolate();
    }

    public function addSugar()
    {
        $this->drink->addSugar();
        $this->sugarCode = $this->drink->getSugar();
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