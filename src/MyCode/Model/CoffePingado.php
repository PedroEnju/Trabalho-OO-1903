<?php

namespace MyCode\Model;

use MyCode\Face\InterfaceCoffe;

class CoffePingado implements InterfaceCoffe
{
    public function cafe(): string
    {
        return "Pingado";
    }
}
