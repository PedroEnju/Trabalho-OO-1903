<?php

namespace MyCode\Factory;

class CoffePingadoFactory extends CoffeFactory
{
    public function cafe()
    {
        return new \MyCode\Model\CoffePingado();
    }
}
