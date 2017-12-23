<?php
namespace CoffeeMachine\Tests;

use CoffeeMachine\TeaDrink;

class TeaDrinkTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function should_return_code() {
        // Arrange
        $teaDrink = new TeaDrink();

        // Act
        $code = $teaDrink->getCode();

        // Arrange
        $this->assertEquals('T', $code);
    }

}