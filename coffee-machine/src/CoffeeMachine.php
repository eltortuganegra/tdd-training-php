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

//        return $this->drink->getCode() . ':' . $this->sugarCode . ':' . $this->stickCode;
        return $this->drink->getDrinkType()->getCode() . ':' . $this->sugarCode . ':' . $this->stickCode;
    }

    public function pressCoffeeButton()
    {
        $drinkTypeCoffee = new DrinkTypeCoffee();
        $this->drink->setDrinkType($drinkTypeCoffee);
    }

    public function pressTeaButton()
    {
//        $this->drink = DrinkFactory::createTea();
        $drinkTypeTea = new DrinkTypeTea();
        $this->drink->setDrinkType($drinkTypeTea);
    }

    public function pressChocolateButton()
    {
//        $this->drink = DrinkFactory::createChocolate();
        $drinkTypeChocolate = new DrinkTypeChocolate();
        $this->drink->setDrinkType($drinkTypeChocolate);
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