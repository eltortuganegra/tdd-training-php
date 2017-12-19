<?php

namespace PasswordValidator;

class PasswordValidator
{
    public function validate($password)
    {
        return $this->isMoreThanEightCharacters($password)
            && $this->doesPasswordHaveAnUppercaseCharacter($password);
    }

    protected function isMoreThanEightCharacters($password)
    {
        return strlen($password) > 8;
    }

    protected function doesPasswordHaveAnUppercaseCharacter($password)
    {
        return preg_match('/[A-Z]/', $password) === 1;
    }
}
