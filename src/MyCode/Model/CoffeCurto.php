<?php

namespace MyCode\Model;

use MyCode\Face\InterfaceCoffe;

class CoffeCurto implements InterfaceCoffe
{
    public function cafe(): string
    {
        return "Curto";
    }
}
