<?php
include_once("../assets/autoload.php");

class RouteClass
{
    private
        $database;

    public function __construct() {
        $this->database = new DataBaseClass();
    }

    public function getRouteName() {
        $routeName[] = array();
        $result = $this->database->selectData('SELECT `routeName` FROM `Route`');
        $i = 0;
        while ($item = mysqli_fetch_array($result)) {
            $routeName[$i] = $item['routeName'];
            $i++;
        }

        return $routeName;
    }

    public function getStops() {
        $stops[] = array();
        $result = $this->database->selectData('SELECT `stops` FROM `Route`');
        $i = 0;
        while ($item = mysqli_fetch_array($result)) {
            $stops[$i] = $item['stops'];
            $i++;
        }

        return $stops;
    }

    public function outputRoutes($page) {
        $routeName = $this->getRouteName();
        $stops = $this->getStops();

        switch($page) {
            case 'home':
                for ($i = 0; $i < count($routeName); $i++) {
                    echo "<a role='button' data-route='' onclick='onClick($i)'>
                             <h4>$routeName[$i]</h4>
                             <p>$stops[$i]</p>
                          </a>";
                }
                break;
            case 'profile':
                for ($i = 0; $i < count($routeName); $i++) {
                    $line = $routeName[$i] . " " . $stops[$i];
                    echo "<option value='$routeName[$i]'>$line</option>";
                }
                break;
        }
    }
}
