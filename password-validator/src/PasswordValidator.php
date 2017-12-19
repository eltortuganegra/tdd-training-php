<?php

namespace PasswordValidator;

class PasswordValidator
{

    public function validate($password)
    {
        if (strlen($password) < 8) {
            return false;
        }

        return true;
    }
}
