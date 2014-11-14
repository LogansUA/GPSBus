<?php
include_once("../assets/autoload.php");
include_once("../assets/redirect.php");

session_start();
?>
<!DOCTYPE html>
<html>
    <head lang="en">
        <?php include_once("../assets/resources/Header.php"); ?>
        <title>Профіль</title>
    </head>

    <body>
        <?php include_once("../assets/resources/NavigationPanel.php"); ?>

        <div class="container adaptiveContainer">
            <div class="container adaptiveContainer">
            <!-- left, vertical navbar & content -->
                <div class="row">
                    <?php include_once("../assets/resources/left_navbar.php"); ?>

                    <!-- content -->
                    <div class="col-md-10 adaptiveCol-MD-10">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-default bootstrap-admin-no-table-panel">
                                    <div class="panel-heading">
                                        <div class="text-muted bootstrap-admin-box-title">Профіль</div>
                                    </div>
                                    <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">
                                        <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                            <fieldset>
                                                <legend>Інформація</legend>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="typeahead">Ім’я:</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" class="form-control col-md-6 textWidth" id="typeahead" value="<?php echo $_SESSION['firstName']; ?>" name="firstName" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="typeahead">Прізвище:</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" class="form-control col-md-6 textWidth" id="typeahead" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="select02">Стать:</label>
                                                    <div class="col-lg-10">
                                                        <select id="select02" class="selectize-select">
                                                            <option value="male">Чоловіча</option>
                                                            <option value="female">Жіноча</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="typeahead">Мережеве ім’я:</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" class="form-control col-md-6 textWidth" id="typeahead" value="<?php echo $_SESSION['nickName']; ?>" name="nickName" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="typeahead">Email:</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" class="form-control col-md-6 textWidth" id="typeahead" value="<?php echo $_SESSION['email']; ?>" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="select02">Маршрут:</label>
                                                    <div class="col-lg-10">
                                                        <select id="select02" class="selectize-select">
                                                            <?php
                                                            $route = new RouteClass();

                                                            $routeName = $route->getRouteName();
                                                            $stops = $route->getStops();

                                                            for ($i = 0; $i < count($routeName); $i++) {
                                                                $line = $routeName[$i] . " " . $stops[$i];
                                                                echo "<option value='$routeName[$i]'>$line</option>";
                                                            }

                                                            if (isset($_POST["save"])) {
                                                                $_SESSION['firstName'] = $_POST['firstName'];

                                                                $database = new DataBaseClass();

                                                                $idDriver = $_SESSION['idDriver'];
                                                                $firstName = $_POST['firstName'];
                                                                $nickName = $_POST['nickName'];

                                                                $database->insertData("UPDATE `Driver` SET `firstName`='$firstName', `nickName`='$nickName'
                                                                                       WHERE `idDriver`=$idDriver");
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="typeahead"></label>
                                                    <div class="col-lg-10">
                                                        <button type="submit" class="btn btn-primary" name="save">Зберегти</button>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
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