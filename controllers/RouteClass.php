<?php
include_once("../assets/autoload.php");

class RouteClass
{
    private
        $controller;

    public function __construct() {
        $this->controller = new DataBaseClass();
    }

    public function getRouteName() {
        $routeName[] = array();
        $result = $this->controller->selectData('SELECT `routeName` FROM `Route`');
        $i = 0;
        while ($item = mysqli_fetch_array($result)) {
            $routeName[$i] = $item['routeName'];
            $i++;
        }

        return $routeName;
    }

    public function getStops() {
        $stops[] = array();
        $result = $this->controller->selectData('SELECT `stops` FROM `Route`');
        $i = 0;
        while ($item = mysqli_fetch_array($result)) {
            $stops[$i] = $item['stops'];
            $i++;
        }

        return $stops;
    }
}