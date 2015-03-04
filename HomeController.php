<?php

include_once('bootstrap.php');

$routeRepository = $entityManager->getRepository('Route');
$routes = $routeRepository->findAll();

echo "<ul id='route-list' class='nav nav-pills nav-stacked'>";

foreach ($routes as $route) {
    echo "<li class=''>" .
             "<a role='button' data-route-id='" . $route->getId() . "' onclick=''>" .
                 "<h4>" . $route->getRouteName() . "</h4>" .
                 "<p>" . $route->getStops() . "</p>" .
             "</a>" .
         "</li>";
}

echo "</ul>";
