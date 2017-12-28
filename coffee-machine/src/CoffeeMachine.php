<?php

namespace CoffeeMachine;

class CoffeeMachine
{
    protected $moneyMachine;
    protected $commandMachine;
    protected $drink;

    public function __construct()
    {
        $this->moneyMachine = new MoneyMachine();
        $this->commandMachine = new CommandMachine();
        $this->drink = new Drink();
    }

    public function getCommand()
    {
        if ( ! $this->isThereEnoughMoney()) {
            return $this->getMissingMoneyMessage();
        }

        return $this->commandMachine->getCommand($this->drink);
    }

    public function pressCoffeeButton()
    {
        $drinkTypeCoffee = new DrinkTypeCoffee();
        $this->drink->setDrinkType($drinkTypeCoffee);
    }

    public function pressTeaButton()
    {
        $drinkTypeTea = new DrinkTypeTea();
        $this->drink->setDrinkType($drinkTypeTea);
    }

    public function pressChocolateButton()
    {
        $drinkTypeChocolate = new DrinkTypeChocolate();
        $this->drink->setDrinkType($drinkTypeChocolate);
    }

    public function addSugar()
    {
        $this->drink->addSugar();
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