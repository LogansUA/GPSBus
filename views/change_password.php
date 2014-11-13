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
        <title>Зміна паролю</title>
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

                    <form class="navbar-right" role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                        <?php
                        if (isset($_SESSION['idDriver'])) {
                            echo "<a class='navbar-brand' href='profile.php'>" . $_SESSION['nickName'] . "</a>";
                        }
                        ?>

                        <?php
                        if (isset($_POST['exit'])) {
                            if (isset($_SESSION['idDriver'])) {
                                session_destroy();
                                htmlRedirect("index.php");
                            }
                        }

                        if (isset($_SESSION['idDriver'])) {
                            echo "<button type='submit' class='btn btn-danger exit' name='exit'>Вихід</button>";
                        }
                        ?>
                    </form>
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
                                <a href="profile.php"><i class="glyphicon glyphicon-chevron-right"></i>Профіль</a>
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
                                        <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                            <fieldset>
                                                <legend>Зміна паролю:</legend>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="typeahead">Старий пароль:</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" class="form-control col-md-6" id="typeahead" name="oldPassword" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="typeahead">Новий пароль:</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" class="form-control col-md-6" id="typeahead" name="newPassword" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="typeahead">Повторіть пароль:</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" class="form-control col-md-6" id="typeahead" name="repeatNewPassword" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="typeahead"></label>
                                                    <div class="col-lg-10">
                                                        <button type="submit" class="btn btn-primary" name="save">Зберегти</button>
                                                    </div>
                                                </div>
                                                <?php
                                                if (isset($_POST['save'])) {
                                                    $oldPassword = $_POST['oldPassword'];
                                                    $newPassword = $_POST['newPassword'];
                                                    $repeatNewPassword = $_POST['repeatNewPassword'];

                                                    $idDriver = $_SESSION['idDriver'];

                                                    if ($newPassword == $repeatNewPassword) {
                                                        $database = new DataBaseClass();

                                                        $database->insertData("UPDATE `Driver` SET `password`='$newPassword' WHERE `idDriver`=$idDriver");
                                                        htmlRedirect("profile.php");
                                                    }
                                                }
                                                ?>
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