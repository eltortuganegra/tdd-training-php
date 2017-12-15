<?php

namespace FizzBuzz\Test;

use FizzBuzz\FizzBuzz;

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    const SIZE_NUMBERS_LIST = 100;

    /** @test */
    public function it_should_return_the_number_list_like_an_array()
    {
        $fizzBuzz = new FizzBuzz();
        $numbersList = $fizzBuzz->getNumbersList();

        $isArray = is_array($numbersList);

        $this->assertTrue($isArray);
    }

    /** @test */
    public function it_should_return_number_list_like_an_array_with_one_hundred_elements()
    {
        $fizzBuzz = new FizzBuzz();
        $numbersList = $fizzBuzz->getNumbersList();

        $totalElements = count($numbersList);

        $this->assertEquals(self::SIZE_NUMBERS_LIST, $totalElements);
    }

    /** @test */
    public function it_should_return_number_list_with_a_value_of_one_for_first_position()
    {
        $fizzBuzz = new FizzBuzz();
        $numbersList = $fizzBuzz->getNumbersList();

        $valueForFirstPosition = $numbersList[0];

        $this->assertEquals(1, $valueForFirstPosition);
    }
}
