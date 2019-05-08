<?php

namespace MyCode\Factory;

use MyCode\Face\InterfaceCoffe;

abstract class CoffeFactory implements InterfaceCoffe
{

    const CURTO = "curto";
    const PINGADO = "pingado";
    const EXPRESSO = "expresso";

    public abstract function cafe();

    public function create()
    {
        $this->cafe();
    }

    public function getFactory($tipo)
    {
        switch ($tipo) {
            case self::CURTO:
                return new \MyCode\Factory\CoffeCurtoFactory();
                break;
            case self::PINGADO:
                return new \MyCode\Factory\CoffePingadoFactory();
                break;
            case self::EXPRESSO:
                return new \MyCode\Factory\CoffeExpressoFactory();
                break;
            default:
                return "Tipo incorreto!";
                break;
        }
    }
}
