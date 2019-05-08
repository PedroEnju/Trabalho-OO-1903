<?php

namespace MyCode\Controller;

use MyCode\Factory\CoffeCurtoFactory;
use MyCode\Factory\CoffeFactory;

class Coffe
{
    public function listarCafes()
    {
        $factory = new CoffeCurtoFactory();

        $lista = array(
            "Lista de Café Disponível",
            array(
                array($factory->getFactory(CoffeFactory::CURTO)->cafe()->cafe()),
                array($factory->getFactory(CoffeFactory::PINGADO)->cafe()->cafe()),
                array($factory->getFactory(CoffeFactory::EXPRESSO)->cafe()->cafe())
            )
        );
        return $lista;
    }
}
