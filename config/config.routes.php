<?php

namespace Symfony\Component\Routing\Loader\Configurator;

return function (RoutingConfigurator $routes)
{

    $routes->add('home', '/')->controller(['MyCode\Controller\Home', 'helloWorld']);

    $routes->add('produto', '/produto')->controller(['MyCode\Controller\Produto', 'listarProdutos']);

    $routes->add('sobre', '/sobre')->controller(['MyCode\Controller\Sobre', 'index']);

    $routes->add('coffe', '/cafe/listar')->controller(['MyCode\Controller\Coffe', 'listarCafes']);

};
