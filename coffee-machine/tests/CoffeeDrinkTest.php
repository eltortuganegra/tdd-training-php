<?php
namespace CoffeeMachine\Tests;

use CoffeeMachine\CoffeeDrink;

class CoffeeDrinkTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function should_return_code() {
        // Arrange
        $coffeeDrink = new CoffeeDrink();

        // Act
        $code = $coffeeDrink->getCode();

        // Arrange
        $this->assertEquals('C', $code);
    }

}