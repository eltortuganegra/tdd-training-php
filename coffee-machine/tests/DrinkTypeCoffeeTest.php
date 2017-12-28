<?php
namespace CoffeeMachine\Tests;

use CoffeeMachine\CoffeeDrink;
use CoffeeMachine\DrinkTypeCoffee;

class DrinkTypeCoffeeTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function should_return_code() {
        // Arrange
        $drinkTypeCoffee = new DrinkTypeCoffee();

        // Act
        $code = $drinkTypeCoffee->getCode();

        // Arrange
        $this->assertEquals('C', $code);
    }

}