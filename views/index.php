<?php
include_once("../assets/Classes/DataBaseClass.php");
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="icon" href="../images/icon.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" media="screen" href="../css/bootstrap.min.css">
    <link rel="stylesheet" media="screen" href="../css/bootstrap-theme.min.css">

    <link rel="stylesheet" media="screen" href="../css/style.css">

    <!-- Bootstrap Admin Theme -->
    <link rel="stylesheet" media="screen" href="../css/bootstrap-admin-theme.css">

    <!-- Vendors -->
    <link rel="stylesheet" media="screen" href="../vendors/selectize/dist/css/selectize.bootstrap3.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="../js/html5shiv.js"></script>
    <script type="text/javascript" src="../js/respond.min.js"></script>
    <![endif]-->

    <title>GPSBus</title>

    <style type="text/css" id="holderjs-style"></style>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="../js/google-map.js" ></script>
</head>

<body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="../index.php">GPS Bus</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Головна</a></li>
                    <li><a href="#">Про нас</a></li>
                    <li><a href="#">Контакти</a></li>
                </ul>

                <div class="navbar-right">
                    <a class="navbar-brand" href="profile.php">
                        <?php
                        echo "NickName";
                        ?>
                    </a>
                </div>
            </div><!--/.navbar-collapse -->
        </div>
    </div>

    <div class="container adaptiveContainer">

        <div class="container adaptiveContainer">
            <!-- left, vertical navbar & content -->
            <div class="row">
                <!-- left, vertical navbar -->
                <div class="adaptiveCol-MD-2 ">
                    <div class="col-lg-10 routeSpinner">
                        <label type="Text">Маршрут:</label>
                        <select id="select02" class="selectize-select" style="width: 230px">
                            <?php
                            $database = new Database();
                            $result = $database->selectData('SELECT `routeName` FROM `Route`');
                            $routeName[] = array();
                            $i = 0;

                            while ($item = mysqli_fetch_array($result)) {
                                $routeName[$i] = $item['routeName'];
                                $i++;
                            }

                            foreach ($routeName as $route) {
                                echo "<option value='$route'>$route</option>";
                            }

                            ?>
                        </select>
                    </div>
                </div>

                <!-- content -->
                <div class="col-md-10 adaptiveCol-MD-10">
                    <div id="map_canvas" class="map"></div>
                </div>
            </div>
        </div>

        <hr>

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