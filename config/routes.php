<?php
/**
 * Configuration des routes.
 *
 * Dans ce fichier, vous configurez les routes vers vos contrôleurs et leurs actions.
 * Les routes sont un mécanisme très important qui vous permet de connecter librement
 * différentes URLs aux contrôleurs et à leurs actions (fonctions) choisis.
 *
 * Ce fichier est chargé dans le contexte de la méthode `Application::routes()` qui
 * reçoit une instance de `RouteBuilder` nommée `$routes` comme argument de la méthode.
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Pour plus d'informations sur les droits d'auteur et la licence, veuillez consulter le fichier LICENSE.txt
 * Les redistributions des fichiers doivent conserver l'avis de droit d'auteur ci-dessus.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;

return function (RouteBuilder $routes): void {


    $routes->setRouteClass(DashedRoute::class);

    $routes->prefix('Admin', function (RouteBuilder $routes) {
        $routes->connect('/dashboard', ['controller' => 'Dashboard', 'action' => 'index']);
        $routes->fallbacks(DashedRoute::class);
    });

    $routes->setRouteClass(DashedRoute::class);

    $routes->scope('/', function (RouteBuilder $builder): void {
        $builder->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);

        $builder->connect('/pages/*', 'Pages::display');

        $builder->fallbacks();
    });
};
