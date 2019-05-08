<?php

namespace MyCode\Factory;

class CoffeCurtoFactory extends CoffeFactory
{
    public function cafe()
    {
        return new \MyCode\Model\CoffeCurto();
    }
}
