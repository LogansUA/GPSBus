<?php
include_once("../../assets/autoload.php");
include_once("../../assets/redirect.php");

session_start();
?>
<!DOCTYPE html>
<html>
    <head lang="en">
        <?php include_once("../../assets/resources/Header.php"); ?>

        <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />
        <title>Головна сторінка</title>
    </head>

    <body>
        <?php include_once("../../assets/resources/NavigationPanel.php"); ?>

        <div class="main-content">
            <div style="margin-left: 8%; margin-right: 5%">
                <div id="left-navbar" class="list-group">
                    <a href="index.php" class="list-group-item">Створити маршрут</a>
                    <a href="change_route.php" class="list-group-item">Змінити маршрут</a>
                </div>

                <script>
                    function changeActive() {
                        var liList = document.getElementById('left-navbar').getElementsByTagName('a');
                        var page = window.location.pathname.split('/').pop();

                        if (page == "index.php") {
                            liList[0].className += " active";
                        } else if (page == "change_route.php") {
                            liList[1].className += " active";
                        }
                    }
                    window.onload = changeActive();
                </script>
            </div>

            <div style="width: 330px; float: left; margin-left: 8%">
                <label for="route-list">Маршрут</label>
                <?php include_once("../../HomeController.php"); ?>
            </div>

            <div class="well bs-component" style="float: left; margin-left: 2%; width: 60%">
                <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <fieldset>
                        <div class="form-group">
                            <label for="route-name" class="col-lg-2 control-label">Номер маршруту</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="route-name" placeholder="Номер маршруту" name="route-name" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="route-stops" class="col-lg-2 control-label">Назва маршруту</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="route-stops" placeholder="Назва маршруту" name="route-stops" />
                            </div>
                        </div>

                        <input id="route-area" type="hidden" name="route-area" />

                        <div>
                            <?php include_once("../../ChangeRouteController.php"); ?>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <button type="reset" class="btn btn-default">Cancel</button>
                                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>

            <div id="map" style="float: right; margin: 0 6% 0 0; width: 805px; height: 300px"></div>
        </div>

        <footer>
            <?php include_once("../../assets/resources/Footer.php"); ?>
        </footer>

        <script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>

        <script src="http://www.mapquestapi.com/sdk/leaflet/v1.s/mq-map.js?key=Kmjtd%7Cluua2qu7n9%2C7a%3Do5-lzbgq"></script>
        <script src="http://www.mapquestapi.com/sdk/leaflet/v1.s/mq-routing.js?key=Kmjtd%7Cluua2qu7n9%2C7a%3Do5-lzbgq"></script>

        <script src="../../web/js/jquery.js"></script>
        <script src="../../web/js/map_admin.js"></script>

        <script>
            $(document).ready(function() {
                $('#main-button').removeClass('active');
                $('#admin-panel-button').addClass('active');

                $('ul#route-list li:first').addClass('active');
                $('#route-name').val($('ul#route-list li:first').children().children('h4').text());
                $('#route-stops').val($('ul#route-list li:first').children().children('p').text());

                $('ul#route-list li').click(function() {
                    $('li.active').removeClass('active');
                    $(this).addClass('active');

                    $('#route-name').val($(this).children().children('h4').text());
                    $('#route-stops').val($(this).children().children('p').text());
                });
            });
        </script>
    </body>
</html>
