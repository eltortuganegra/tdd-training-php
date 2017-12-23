<?php
namespace CoffeeMachine\Tests;

use CoffeeMachine\ChocolateDrink;

class ChocolateDrinkTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function should_return_code() {
        // Arrange
        $teaDrink = new ChocolateDrink();

        // Act
        $code = $teaDrink->getCode();

        // Arrange
        $this->assertEquals('H', $code);
    }

}