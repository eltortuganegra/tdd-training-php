<?php

namespace PasswordValidator\Test;

use PasswordValidator\PasswordValidator;

class PasswordValidatorTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_should_has_a_validate_method()
    {
        $passwordValidator = new PasswordValidator();

        $this->assertTrue(method_exists($passwordValidator, 'validate'));
    }

    /** @test */
    public function it_should_validate_a_valid_password()
    {
        $passwordValidator = new PasswordValidator();
        $validPassword = '12345678Ab1_';

        $isValid = $passwordValidator->validate($validPassword);

        $this->assertTrue($isValid);
    }

    /** @test */
    public function it_should_has_a_size_more_than_eight_characters()
    {
        $passwordValidator = new PasswordValidator();
        $wrongPassword = '1234Ab1_';

        $isValid = $passwordValidator->validate($wrongPassword);

        $this->assertFalse($isValid);
    }

    /** @test */
    public function it_should_has_a_capital_letter()
    {
        $passwordValidator = new PasswordValidator();
        $wrongPassword = '12345678ab1_';

        $isValid = $passwordValidator->validate($wrongPassword);

        $this->assertFalse($isValid);
    }

    /** @test */
    public function it_should_has_a_lower_case()
    {
        $passwordValidator = new PasswordValidator();
        $wrongPassword = '12345678AB1_';

        $isValid = $passwordValidator->validate($wrongPassword);

        $this->assertFalse($isValid);
    }

}
