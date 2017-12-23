<?php

namespace CoffeeMachine\Tests;

use CoffeeMachine\CoffeeDrink;
use CoffeeMachine\MoneyMachine;
use CoffeeMachine\TeaDrink;

class MoneyMachineTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function should_return_false_if_there_is_not_enough_money_for_a_drink() {
        // Arrange
        $moneyMachine = new MoneyMachine();
        $coffeeDrink = new CoffeeDrink();
        $teaDrink = new TeaDrink();
        $notEnoughAmountOfMoney = 0;

        // Act
        $moneyMachine->insertMoney($notEnoughAmountOfMoney);
        $isEnoughMoney = $moneyMachine->isThereEnoughMoney($coffeeDrink);

        // Arrange
        $this->assertFalse($isEnoughMoney);

        // Act
        $isEnoughMoney = $moneyMachine->isThereEnoughMoney($teaDrink);

        // Arrange
        $this->assertFalse($isEnoughMoney);
    }
    /** @test */
    public function should_return_true_if_there_is_enough_money_for_a_drink() {
        // Arrange
        $moneyMachine = new MoneyMachine();
        $coffeeDrink = new CoffeeDrink();
        $teaDrink = new TeaDrink();
        $amountOfMoneyForCoffee = 0.6;
        $amountOfMoneyForTea = 0.4;

        // Act
        $moneyMachine->insertMoney($amountOfMoneyForCoffee);
        $isEnoughMoney = $moneyMachine->isThereEnoughMoney($coffeeDrink);

        // Arrange
        $this->assertTrue($isEnoughMoney);

        // Act
        $moneyMachine->insertMoney($amountOfMoneyForTea);
        $isEnoughMoney = $moneyMachine->isThereEnoughMoney($teaDrink);

        // Arrange
        $this->assertTrue($isEnoughMoney);
    }

}