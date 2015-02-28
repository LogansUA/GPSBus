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
            <?php include_once("../controllers/HomeController.php"); ?>
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
</body>
</html>
