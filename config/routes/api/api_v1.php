<?php

use App\Controller\FirstController;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return function (RoutingConfigurator $routes) {

    $routes->add('blog_list', '/blog')
        ->controller([FirstController::class, 'index']);

};
