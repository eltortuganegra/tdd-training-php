<?php
namespace CoffeeMachine\Tests;

use CoffeeMachine\DrinkTypeTea;

class DrinkTypeTeaTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function should_return_code() {
        // Arrange
        $drinkTypeTea = new DrinkTypeTea();

        // Act
        $code = $drinkTypeTea->getCode();

        // Arrange
        $this->assertEquals('T', $code);
    }

}