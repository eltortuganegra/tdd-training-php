<?php

namespace CoffeeMachine;

class TeaDrink implements DrinkInterface
{
    public function getCode()
    {
        return 'T';
    }
}