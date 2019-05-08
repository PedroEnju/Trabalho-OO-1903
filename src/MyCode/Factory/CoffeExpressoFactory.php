<?php

namespace MyCode\Factory;

class CoffeExpressoFactory extends CoffeFactory
{
    public function cafe()
    {
        return new \MyCode\Model\CoffeExpresso();
    }
}
