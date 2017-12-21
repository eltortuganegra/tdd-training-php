<?php

namespace CoffeeMachine\Tests;

use CoffeeMachine\CoffeeMachine;

class CoffeeMachineTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function should_serve_a_coffee_when_coffee_button_is_pressed() {
        // Arrange
        $coffeeMachine = new CoffeeMachine();

        // Act
        $coffeeMachine->pressCoffeeButton();
        $command = $coffeeMachine->getCommand();

        // Arrange
        $this->assertEquals('C::', $command);
    }

    /** @test */
    public function should_serve_a_tea_when_tea_button_is_pressed() {
        // Arrange
        $coffeeMachine = new CoffeeMachine();

        // Act
        $coffeeMachine->pressTeaButton();
        $command = $coffeeMachine->getCommand();

        // Arrange
        $this->assertEquals('T::', $command);
    }

    /** @test */
    public function should_serve_a_chocolate_when_chocolate_button_is_pressed() {
        // Arrange
        $coffeeMachine = new CoffeeMachine();

        // Act
        $coffeeMachine->pressChocolateButton();
        $command = $coffeeMachine->getCommand();

        // Arrange
        $this->assertEquals('H::', $command);
    }

    /** @test */
    public function should_serve_a_coffee_with_one_sugar() {
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