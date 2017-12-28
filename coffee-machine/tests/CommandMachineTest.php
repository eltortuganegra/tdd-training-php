<?php

namespace CoffeeMachine\Tests;

use CoffeeMachine\CommandMachine;
use CoffeeMachine\Drink;
use CoffeeMachine\DrinkTypeCoffee;

class CommandMachineTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function should_return_the_command_for_a_drink_with_zero_sugar() {
        // Arrange
        $commandMachine = new CommandMachine();
        $coffeeDrink = new Drink();
        $coffeeDrink->setDrinkType(new DrinkTypeCoffee());

        // Act
        $command = $commandMachine->getCommand($coffeeDrink);

        // Arrange
        $this->assertEquals('C::', $command);
    }

    /** @test */
    public function should_return_the_command_for_a_drink_with_one_sugar() {
        // Arrange
        $commandMachine = new CommandMachine();
        $coffeeDrink = new Drink();
        $coffeeDrink->setDrinkType(new DrinkTypeCoffee());
        $coffeeDrink->addSugar();

        // Act
        $command = $commandMachine->getCommand($coffeeDrink);

        // Arrange
        $this->assertEquals('C:1:0', $command);
    }

    /** @test */
    public function should_return_the_command_for_a_drink_with_two_sugar() {
        // Arrange
        $commandMachine = new CommandMachine();
        $coffeeDrink = new Drink();
        $coffeeDrink->setDrinkType(new DrinkTypeCoffee());
        $coffeeDrink->addSugar();
        $coffeeDrink->addSugar();

        // Act
        $command = $commandMachine->getCommand($coffeeDrink);

        // Arrange
        $this->assertEquals('C:2:0', $command);
    }

}