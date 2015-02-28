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

    <div class="container adaptiveContainer">
        <div class="container adaptiveContainer">
            <!-- left, vertical navbar & content -->
            <div class="row">
                <!-- left, vertical navbar -->
                <div class="adaptiveCol-MD-2 ">
                    <div class="col-lg-10 routeSpinner">
                        <label type="Text">Маршрут:</label>
                        <div id="routeList" class="col-sm-4" style="width: 330px;">
                            <div class="list-group">
                                <?php include_once("../controllers/HomeController.php"); ?>
                            </div>
                        </div><!-- /.col-sm-4 -->

                        <script>
                            function onClick(element) {
                                var optionValue = document.getElementsByTagName("h4")[element].innerHTML;
                                var listItem = document.getElementById("routeList").getElementsByTagName("a");
                                var it = document.getElementById("routeList").getElementsByClassName("list-group-item active");
                                if (it.length !== 0) {
                                    it[0].className = "list-group-item";
                                }

                                listItem[element].className += " active";
                                displayRoute(optionValue);
                            }
                        </script>
                    </div>
                </div>
                <!-- content -->
                <div class="col-md-10 adaptiveCol-MD-10">
                    <div id="map_canvas" class="map"></div>
                </div>
            </div>
        </div>
        <hr/>
        <footer>
            <p>© Company 2014</p>
        </footer>
    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../web/js/jquery.min.js"></script>
    <script src="../web/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="../web/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../web/js/spinners.js"></script>

    <script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
</body>
</html>
