<?php

namespace MyCode\Model;

use MyCode\Face\InterfaceCoffe;

class CoffeExpresso implements InterfaceCoffe
{
    public function cafe(): string
    {
        return "Expresso";
    }
}
