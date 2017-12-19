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
        $validPassword = '1234567';

        $isValid = $passwordValidator->validate($validPassword);

        $this->assertFalse($isValid);
    }



}
