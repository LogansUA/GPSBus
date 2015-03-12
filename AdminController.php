<?php
include_once('bootstrap.php');
include_once('');

if (isset($_POST['submit'])) {
    $routeName  = $_POST['route-name'];
    $routeStops = $_POST['route-stops'];
    $routeArea  = $_POST['route-area'];

    if (empty($routeName) || empty($routeStops) || empty($routeArea)) {
        $errorCode = 2;
    } else {
        $routeRepository = $entityManager->getRepository('Route');

        $route = new Route();

        $route->setName($routeName)
            ->setStops($routeStops)
            ->setArea($routeArea);

        $entityManager->persist($route);
        $entityManager->flush();
    }
}

switch($errorCode) {
    case 1:
        echo 'Помилка';
        break;
    case 2:
        echo 'Не заповнені всі поля.';
        break;
    default:
        break;
}
