<?php

include_once('bootstrap.php');

$routeRepository = $entityManager->getRepository('Route');
$routes = $routeRepository->findAll();

foreach ($routes as $route) {
    echo "<a role='button' data-route='' onclick=''>" .
             "<h4>" . $route->getRouteName() . "</h4>" .
             "<p>" . $route->getStops() . "</p>" .
         "</a>";
}
$entityManager->flush();
