<?php

namespace CoffeeMachine\Tests;

use CoffeeMachine\CoffeeMachine;

class CoffeeMachineTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function should_serve_a_drink_when_a_drink_button_is_pressed() {
        // Arrange
        $coffeeMachine = new CoffeeMachine();

        // Act
        $coffeeMachine->pressCoffeeButton();
        $commandForCoffee = $coffeeMachine->getCommand();
        $coffeeMachine->pressTeaButton();
        $commandForTea = $coffeeMachine->getCommand();
        $coffeeMachine->pressChocolateButton();
        $commandForChocolate = $coffeeMachine->getCommand();

        // Arrange
        $this->assertEquals('C::', $commandForCoffee);
        $this->assertEquals('T::', $commandForTea);
        $this->assertEquals('H::', $commandForChocolate);
    }

    /** @test */
    public function should_serve_a_drink_with_one_sugar_when_sugar_button_is_pressed() {
        // Arrange
        $coffeeMachine = new CoffeeMachine();

        // Act
        $coffeeMachine->addSugar();
        $coffeeMachine->pressCoffeeButton();
        $command = $coffeeMachine->getCommand();

        // Arrange
        $this->assertEquals('C:1:0', $command);
    }

    /** @test */
    public function should_serve_a_drink_with_two_sugar_when_sugar_button_is_pressed_two_times() {
        // Arrange
        $coffeeMachine = new CoffeeMachine();

        // Act
        $coffeeMachine->addSugar();
        $coffeeMachine->addSugar();
        $coffeeMachine->pressCoffeeButton();
        $command = $coffeeMachine->getCommand();

        // Arrange
        $this->assertEquals('C:2:0', $command);
    }

    /** @test */
    public function should_add_one_stick_when_order_contains_sugar() {
        // Arrange
        $coffeeMachine = new CoffeeMachine();

        // Act
        $coffeeMachine->addSugar();
        $coffeeMachine->pressCoffeeButton();
        $command = $coffeeMachine->getCommand();

        // Arrange
        $this->assertEquals('C:1:0', $command);
    }

}