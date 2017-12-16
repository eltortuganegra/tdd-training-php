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
    public function it_should_return_number_list_with_a_value_of_Fizz_for_positions_multiple_of_three_and_it_do_not_have_a_three_number()
    {
        $fizzBuzz = new FizzBuzz();
        $numbersList = $fizzBuzz->getNumbersList();

        $sixPositionIndex = 5;
        $valueForSixthPosition = $numbersList[$sixPositionIndex];
        $this->assertEquals('Fizz', $valueForSixthPosition);

        $ninthPositionIndex = 8;
        $valueForNinthPosition = $numbersList[$ninthPositionIndex];
        $this->assertEquals('Fizz', $valueForNinthPosition);

        $eleventhPositionIndex = 11;
        $valueForEleventhPosition = $numbersList[$eleventhPositionIndex];
        $this->assertEquals('Fizz', $valueForEleventhPosition);
    }

    /** @test */
    public function it_should_return_number_list_with_a_value_of_Buzz_for_positions_multiple_of_five_and_it_do_not_have_a_three_number()
    {
        $fizzBuzz = new FizzBuzz();
        $numbersList = $fizzBuzz->getNumbersList();

        $fifthPositionIndex = 4;
        $valueForFifthPosition = $numbersList[$fifthPositionIndex];
        $this->assertEquals('Buzz', $valueForFifthPosition);

        $twentiethPositionIndex = 19;
        $valueForTwentiethPosition = $numbersList[$twentiethPositionIndex];
        $this->assertEquals('Buzz', $valueForTwentiethPosition);

        $thirtyFifthPositionIndex = 39;
        $valueForThirtyFifthPosition = $numbersList[$thirtyFifthPositionIndex];
        $this->assertEquals('Buzz', $valueForThirtyFifthPosition);
    }

    /** @test */
    public function it_should_return_number_list_with_a_value_of_FizzBuzz_for_position_multiple_of_three_or_five_and_it_does_not_have_a_three_or_five()
    {
        $fizzBuzz = new FizzBuzz();
        $numbersList = $fizzBuzz->getNumbersList();

        $sixtiethPositionIndex = 59;
        $valueForSixtiethPosition = $numbersList[$sixtiethPositionIndex];
        $this->assertEquals('FizzBuzz', $valueForSixtiethPosition);

        $ninetiethPositionIndex = 89;
        $valueForNinetiethFifthPosition = $numbersList[$ninetiethPositionIndex];
        $this->assertEquals('FizzBuzz', $valueForNinetiethFifthPosition);
    }

    /** @test */
    public function it_should_return_number_list_with_a_value_of_Fizz_for_positions_that_contains_the_number_three_in_the_position_and_it_does_not_have_a_five()
    {
        $fizzBuzz = new FizzBuzz();
        $numbersList = $fizzBuzz->getNumbersList();

        $thirtyFirstPositionIndex = 30;
        $valueForThirtyFirstPosition = $numbersList[$thirtyFirstPositionIndex];
        $this->assertEquals('Fizz', $valueForThirtyFirstPosition);

        $fortyThirdPositionIndex = 42;
        $valueForFortyFirstPosition = $numbersList[$fortyThirdPositionIndex];
        $this->assertEquals('Fizz', $valueForFortyFirstPosition);

        $sixtyThirdPositionIndex = 62;
        $valueForSixtyFirstPosition = $numbersList[$sixtyThirdPositionIndex];
        $this->assertEquals('Fizz', $valueForSixtyFirstPosition);
    }

    /** @test */
    public function it_should_return_number_list_with_a_value_of_Buzz_for_positions_that_contains_the_number_five_in_the_position_but_not_three()
    {
        $fizzBuzz = new FizzBuzz();
        $numbersList = $fizzBuzz->getNumbersList();

        $sixtyFifthPositionIndex = 64;
        $valueForThirtyFifthPosition = $numbersList[$sixtyFifthPositionIndex];
        $this->assertEquals('Buzz', $valueForThirtyFifthPosition);

        $fortyFifthPositionIndex = 44;
        $valueForFortyFifthPosition = $numbersList[$fortyFifthPositionIndex];
        $this->assertEquals('Buzz', $valueForFortyFifthPosition);

        $seventyFifthPositionIndex = 74;
        $valueForSeventyFifthPosition = $numbersList[$seventyFifthPositionIndex];
        $this->assertEquals('Buzz', $valueForSeventyFifthPosition);
    }

    /** @test */
    public function it_should_return_number_list_with_a_value_of_Buzz_for_positions_that_contains_the_numbers_three_and_five_in_the_position()
    {
        $fizzBuzz = new FizzBuzz();
        $numbersList = $fizzBuzz->getNumbersList();

        $thirtyFifthPositionIndex = 34;
        $valueForThirtyFifthPosition = $numbersList[$thirtyFifthPositionIndex];

        $this->assertEquals('FizzBuzz', $valueForThirtyFifthPosition);
    }

}
