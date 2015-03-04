<?php
include_once("../assets/autoload.php");
include_once("../assets/redirect.php");

session_start();
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <?php include_once("../assets/resources/Header.php"); ?>

    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />
    <title>Головна сторінка</title>
</head>

<body>
    <?php include_once("../assets/resources/NavigationPanel.php"); ?>

    <div style="margin-top: 1%">
        <div style="width: 330px; float: left; margin-left: 8%">
            <label for="route-list">Маршрут</label>
            <?php include_once("../HomeController.php"); ?>
        </div>
        <div id="map" style="float: right; margin: 2% 2% 0 0"></div>
    </div>

    <footer>
        <?php include_once("../assets/resources/Footer.php"); ?>
    </footer>

    <script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>

    <script src="http://www.mapquestapi.com/sdk/leaflet/v1.s/mq-map.js?key=Kmjtd%7Cluua2qu7n9%2C7a%3Do5-lzbgq"></script>
    <script src="http://www.mapquestapi.com/sdk/leaflet/v1.s/mq-routing.js?key=Kmjtd%7Cluua2qu7n9%2C7a%3Do5-lzbgq"></script>

    <script src="../web/js/map_main.js"></script>
    <script>
        $(document).ready(function() {
            $('ul#route-list li:first').addClass('active');

            $('ul#route-list li').click(function() {
                $('li.active').removeClass('active');
                $(this).addClass('active');
            });
        });
    </script>
</body>
</html>
