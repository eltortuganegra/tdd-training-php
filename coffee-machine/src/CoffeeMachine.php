<?php

namespace CoffeeMachine;

class CoffeeMachine
{
    private $command = null;

    public function pressCoffeeButton()
    {
        $this->command = 'C::';
    }

    public function getCommand()
    {
        return $this->command;
    }

    public function pressTeaButton()
    {
        $this->command = 'T::';
    }
}