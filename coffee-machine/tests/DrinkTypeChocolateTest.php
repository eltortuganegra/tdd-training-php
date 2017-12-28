<?php
namespace CoffeeMachine\Tests;

use CoffeeMachine\DrinkTypeChocolate;

class DrinkTypeChocolateTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function should_return_code() {
        // Arrange
        $drinkTypeChocolate = new DrinkTypeChocolate();

        // Act
        $code = $drinkTypeChocolate->getCode();

        // Arrange
        $this->assertEquals('H', $code);
    }

}