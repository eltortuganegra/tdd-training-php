<?php

namespace PasswordValidator;

class PasswordValidator
{

    public function validate($password)
    {
        if ($this->isLessThanEightCharacters($password)) {

            return false;
        }

        return true;
    }

    protected function isLessThanEightCharacters($password)
    {
        return strlen($password) < 8;
    }
}
