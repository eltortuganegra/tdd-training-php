<?php

namespace CoffeeMachine;

class TeaDrink extends Drink
{
    public function __construct()
    {
        $this->code = 'T';
    }
}