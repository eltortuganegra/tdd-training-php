<?php

namespace PasswordValidator;

class PasswordValidator
{
    public function validate($password)
    {
        if ($this->isLessThanEightCharacters($password)) {

            return false;
        }

        if ($this->doesPasswordNotAnUppercaseCharacter($password)) {

            return false;
        }

        return true;
    }

    protected function isLessThanEightCharacters($password)
    {
        return strlen($password) <= 8;
    }

    protected function doesPasswordNotAnUppercaseCharacter($password)
    {
        return preg_match('/[A-Z]/', $password) === 0;
    }
}
