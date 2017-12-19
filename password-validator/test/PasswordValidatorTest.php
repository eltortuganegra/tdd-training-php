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


}
