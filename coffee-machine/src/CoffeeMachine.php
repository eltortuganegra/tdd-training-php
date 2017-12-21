<?php

namespace CoffeeMachine;

class CoffeeMachine
{
    private $command = null;

    public function getCommand()
    {
        return $this->command;
    }

    public function pressCoffeeButton()
    {
        $this->command = 'C::';
    }

    public function pressTeaButton()
    {
        $this->command = 'T::';
    }

    public function pressChocolateButton()
    {
        $this->command = 'H::';
    }

}