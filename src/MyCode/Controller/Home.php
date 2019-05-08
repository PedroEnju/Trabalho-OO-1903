<?php

namespace MyCode\Controller;

use MyCode\CoffeFactory;

class Home
{
    
    public function helloWorld()
    {
        return "Hello World";
    }

    public function listarCafe()
    {
        $curto = new CoffeFactory("Curto");
        $pingado = new CoffeFactory("Pingado");
        $expresso = new CoffeFactory("Expresso");

        $lista = array(
            "Lista de Café Disponível",
            array(
                array($curto->cafe()),
                array($pingado->cafe()),
                array($expresso->cafe())
            )
        );
        return $lista;
    }
}
