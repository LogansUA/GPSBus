<?php
function __autoload($className) {
    require("../assets/Classes/" . $className . ".php");
}
require("../assets/Redirect.php");
session_start();
?>
<!DOCTYPE html>
<html>
    <head lang="en">
        <?php include "../assets/Resources/Header.php"; ?>
        <title>Головна сторінка</title>
    </head>

    <body>
        <?php include "../assets/Resources/NavigationPanel.php"; ?>

        <div class="container adaptiveContainer">
            <div class="container adaptiveContainer">
                <!-- left, vertical navbar & content -->
                <div class="row">
                    <!-- left, vertical navbar -->
                    <div class="adaptiveCol-MD-2 ">
                        <div class="col-lg-10 routeSpinner">
                            <label type="Text">Маршрут:</label>
                            <select id="select02" class="selectize-select" onchange="onChange()" style="width: 300px">
                                <option value="0">Не вибрано</option>"
                                <?php
                                $route = new RouteClass();

                                $routeName = $route->getRouteName();
                                $stops = $route->getStops();

                                for ($i = 0; $i < count($routeName); $i++) {
                                    $line = $routeName[$i] . " " . $stops[$i];
                                    echo "<option value='$routeName[$i]'>$line</option>";
                                }
                                ?>
                            </select>

                            <div id="jsConsole">
                            </div>

                            <script>
                                var optionValue;
                                function onChange() {
                                    optionValue = document.getElementsByTagName("option")[0].getAttribute("value");
                                    //document.getElementById("jsConsole").innerHTML = optionValue;

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
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../js/ie10-viewport-bug-workaround.js"></script>

        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../vendors/uniform/jquery.uniform.min.js"></script>
        <script type="text/javascript" src="../vendors/chosen.jquery.min.js"></script>
        <script type="text/javascript" src="../vendors/selectize/dist/js/standalone/selectize.min.js"></script>
        <script type="text/javascript" src="../vendors/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="../js/spinners.js"></script>
    </body>
</html>