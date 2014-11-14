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
                                    <?php
                                    $route = new RouteClass();

                                    $routeName = $route->getRouteName();
                                    $stops = $route->getStops();

                                    for ($i = 0; $i < count($routeName); $i++) {
                                        echo "<a href='#' class='list-group-item' onclick='onClick($i)'>
                                                <h4 class='list-group-item-heading'>$routeName[$i]</h4>
                                                <p class='list-group-item-text'>$stops[$i]</p>
                                              </a>";
                                    }
                                    ?>
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
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="js/ie10-viewport-bug-workaround.js"></script>

        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="vendors/uniform/jquery.uniform.min.js"></script>
        <script type="text/javascript" src="vendors/chosen.jquery.min.js"></script>
        <script type="text/javascript" src="vendors/selectize/dist/js/standalone/selectize.min.js"></script>
        <script type="text/javascript" src="vendors/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="js/spinners.js"></script>
    </body>
</html>