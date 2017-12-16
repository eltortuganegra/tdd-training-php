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

    /** @test */
    public function it_should_return_number_list_with_a_value_of_two_for_second_position()
    {
        $fizzBuzz = new FizzBuzz();
        $numbersList = $fizzBuzz->getNumbersList();

        $valueForSecondPosition = $numbersList[1];

        $this->assertEquals(2, $valueForSecondPosition);
    }

    /** @test */
    public function it_should_return_number_list_with_a_value_of_four_for_fourth_position()
    {
        $fizzBuzz = new FizzBuzz();
        $numbersList = $fizzBuzz->getNumbersList();

        $valueForFourthPosition = $numbersList[3];

        $this->assertEquals(4, $valueForFourthPosition);
    }

    /** @test */
    public function it_should_return_number_list_with_a_value_of_Fizz_for_positions_multiple_of_three()
    {
        $fizzBuzz = new FizzBuzz();
        $numbersList = $fizzBuzz->getNumbersList();

        $thirdPositionIndex = 2;
        $valueForThirdPosition = $numbersList[$thirdPositionIndex];
        $this->assertEquals('Fizz', $valueForThirdPosition);

        $sixPositionIndex = 5;
        $valueForSixthPosition = $numbersList[$sixPositionIndex];
        $this->assertEquals('Fizz', $valueForSixthPosition);

        $sixPositionIndex = 8;
        $valueForSixthPosition = $numbersList[$sixPositionIndex];
        $this->assertEquals('Fizz', $valueForSixthPosition);
    }

    /** @test */
    public function it_should_return_number_list_with_a_value_of_Buzz_for_positions_multiple_of_five()
    {
        $fizzBuzz = new FizzBuzz();
        $numbersList = $fizzBuzz->getNumbersList();

        $fifthPositionIndex = 4;
        $valueForFifthPosition = $numbersList[$fifthPositionIndex];
        $this->assertEquals('Buzz', $valueForFifthPosition);

        $twentiethPositionIndex = 19;
        $valueForTwentiethPosition = $numbersList[$twentiethPositionIndex];
        $this->assertEquals('Buzz', $valueForTwentiethPosition );

        $thirtyFifthPositionIndex = 34;
        $valueForThirtyFifthPosition = $numbersList[$thirtyFifthPositionIndex];
        $this->assertEquals('Buzz', $valueForThirtyFifthPosition );
    }

    /** @test */
    public function it_should_return_number_list_with_a_value_of_FizzBuzz_for_fifteenth_position()
    {
        $fizzBuzz = new FizzBuzz();
        $numbersList = $fizzBuzz->getNumbersList();

        $fifteenthPositionIndex = 14;
        $valueForFifteenthPosition = $numbersList[$fifteenthPositionIndex];
        $this->assertEquals('FizzBuzz', $valueForFifteenthPosition);
    }

    /** @test */
    public function it_should_return_number_list_with_a_value_of_FizzBuzz_for_thirtieth_position()
    {
        $fizzBuzz = new FizzBuzz();
        $numbersList = $fizzBuzz->getNumbersList();

        $thirtiethPositionIndex = 29;
        $valueForThirtiethPosition = $numbersList[$thirtiethPositionIndex];
        $this->assertEquals('FizzBuzz', $valueForThirtiethPosition);
    }

//    /** @test */
//    public function it_should_return_number_list_with_a_value_of_Fizz_for_positions_that_contains_the_number_three_as_position_31()
//    {
//        $fizzBuzz = new FizzBuzz();
//        $numbersList = $fizzBuzz->getNumbersList();
//
//        $thirtyFirstPositionIndex = 30;
//        $valueForThirtyFirstPosition = $numbersList[$thirtyFirstPositionIndex];
//        $this->assertEquals('Fizz', $valueForThirtyFirstPosition);
//
//        $thirtySecondPositionIndex = 31;
//        $valueForThirtySecondPosition = $numbersList[$thirtySecondPositionIndex];
//        $this->assertEquals('Fizz', $valueForThirtySecondPosition);
//
//        $eightyThirdPositionIndex = 82;
//        $valueForEightyThirdPosition = $numbersList[$eightyThirdPositionIndex ];
//        $this->assertEquals('Fizz', $valueForEightyThirdPosition);
//    }

}
