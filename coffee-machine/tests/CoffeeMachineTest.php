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

}