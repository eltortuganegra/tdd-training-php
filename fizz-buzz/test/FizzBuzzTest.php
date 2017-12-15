<?php

namespace FizzBuzz\Test;

use FizzBuzz\FizzBuzz;

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_should_return_the_number_list_like_an_array()
    {
        $fizzBuzz = new FizzBuzz();
        $numberList = $fizzBuzz->getNumbersList();

        $isArray = is_array($numberList);

        $this->assertTrue($isArray);
    }

    /** @test */
    public function it_should_return_number_list_like_an_array_with_one_hundred_elements()
    {
        $fizzBuzz = new FizzBuzz();
        $numberList = $fizzBuzz->getNumbersList();

        $totalElements = count($numberList);

        $this->assertEquals(100, $totalElements);
    }
}
