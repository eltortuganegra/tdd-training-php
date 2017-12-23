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

    const COFFEE_PRIZE = 0.6;
    const COFFEE_TEA = 0.4;
    const COFFEE_CHOCOLATE = 0.5;

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
        if ($this->isDrinkACoffee()) {
            $missingMoney = self::COFFEE_PRIZE - $this->amountMoney;
        } elseif ($this->isDrinkATea()) {
            $missingMoney = self::COFFEE_TEA - $this->amountMoney;
        } else {
            $missingMoney = self::COFFEE_CHOCOLATE - $this->amountMoney;
        }

        return 'M:Money missing: ' . $missingMoney;
    }

    protected function isDrinkACoffee()
    {
        return is_a($this->drink, 'CoffeeMachine\CoffeeDrink');
    }

    protected function isDrinkATea()
    {
        return is_a($this->drink, 'CoffeeMachine\TeaDrink');
    }

}