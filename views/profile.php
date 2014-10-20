<!DOCTYPE html>
<html>
    <head lang="en">
        <title>Профіль</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

    </head>

    <body>

        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="../index.php">GPS Bus</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Головна</a></li>
                        <li><a href="#">Про нас</a></li>
                        <li><a href="#">Контакти</a></li>
                    </ul>

                    <div class="navbar-right">
                        <a class="navbar-brand active" href="#">
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
                    <div class="col-md-2 bootstrap-admin-col-left adaptiveCol-MD-2">
                        <ul class="nav navbar-collapse collapse bootstrap-admin-navbar-side">
                            <li class="active">
                                <a href=""><i class="glyphicon glyphicon-chevron-right"></i>Профіль</a>
                            </li>
                            <li>
                                <a href=""><i class="glyphicon glyphicon-chevron-right"></i>Налаштування</a>
                            </li>
                        </ul>
                    </div>

                    <!-- content -->
                    <div class="col-md-10 adaptiveCol-MD-10">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-default bootstrap-admin-no-table-panel">
                                    <div class="panel-heading">
                                        <div class="text-muted bootstrap-admin-box-title">Профіль</div>
                                    </div>
                                    <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">
                                        <form class="form-horizontal">
                                            <fieldset>
                                                <legend>Інформація</legend>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="typeahead">Ім’я:</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" class="form-control col-md-6" id="typeahead" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="typeahead">Прізвище:</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" class="form-control col-md-6" id="typeahead" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="select02">Стать:</label>
                                                    <div class="col-lg-10">
                                                        <select id="select02" class="selectize-select" style="width: 250px">
                                                            <option value="male">Чоловіча</option>
                                                            <option value="female">Жіноча</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="typeahead">Мережеве ім’я:</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" class="form-control col-md-6" id="typeahead" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="typeahead">Email:</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" class="form-control col-md-6" id="typeahead" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="select02">Маршрут:</label>
                                                    <div class="col-lg-10">
                                                        <select id="select02" class="selectize-select" style="width: 250px">
                                                            <?php
                                                            require_once("../assets/Classes/Database.php");

                                                            $database = new Database();
                                                            $resultRoute = $database->selectData("SELECT `routeName` FROM `Route`");
                                                            $routeName[] = array();
                                                            $i = 0;

                                                            while ($item = mysqli_fetch_array($resultRoute)) {
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