<?php

namespace CoffeeMachine;

class Drink
{
    protected $code = null;
    protected $sugar = 0;

    public function getCode()
    {
        return $this->code;
    }

    public function addSugar()
    {
        $this->sugar++;
    }

    public function getSugar()
    {
        return $this->sugar;
    }
}