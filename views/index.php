<?php
include_once("../assets/autoload.php");
include_once("../assets/redirect.php");

session_start();
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <?php include_once("../assets/resources/Header.php"); ?>
    <title>Головна сторінка</title>
</head>

<body>
    <?php include_once("../assets/resources/NavigationPanel.php"); ?>

    Маршрут:
    <div>
        <div id="routeList" style="width: 330px; float: left">
            <?php include_once("../HomeController.php"); ?>
        </div>

        <div id="map" style="float: right;"></div>

        <script>
//      function onClick(element) {
//          var optionValue = document.getElementsByTagName("h4")[element].innerHTML;
//          var listItem = document.getElementById("routeList").getElementsByTagName("a");
//          var it = document.getElementById("routeList").getElementsByClassName("list-group-item active");
//          if (it.length !== 0) {
//              it[0].className = "list-group-item";
//          }
//
//          listItem[element].className += " active";
//          displayRoute(optionValue);
//      }
    </script>

    </div>

    <script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>

    <script src="http://www.mapquestapi.com/sdk/leaflet/v1.s/mq-map.js?key=Kmjtd%7Cluua2qu7n9%2C7a%3Do5-lzbgq"></script>
    <script src="http://www.mapquestapi.com/sdk/leaflet/v1.s/mq-routing.js?key=Kmjtd%7Cluua2qu7n9%2C7a%3Do5-lzbgq"></script>

    <script src="../web/js/map_main.js"></script>
</body>
</html>
