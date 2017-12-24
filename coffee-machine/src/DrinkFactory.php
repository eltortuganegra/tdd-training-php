<?php

namespace CoffeeMachine;

class DrinkFactory
{

    public static function createCoffee()
    {
        return new CoffeeDrink();
    }

    public static function createTea()
    {
        return new TeaDrink();
    }

    public static function createChocolate()
    {
        return new ChocolateDrink();
    }

}