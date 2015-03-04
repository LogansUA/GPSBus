<?php
include_once("../../assets/autoload.php");
include_once("../../assets/redirect.php");

session_start();
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <?php include_once("../../assets/resources/Header.php"); ?>
    <title>Профіль</title>
</head>

<body>
    <header>
        <?php include_once("../../assets/resources/NavigationPanel.php"); ?>
    </header>

    <div class="container" style="margin-top: 3%">
        <main>
            <div style="float:left; width: 25%">
                <?php include_once("../../assets/resources/left_navbar.php"); ?>
            </div>

            <div style="float: right; width: 60%;">
                <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <fieldset>
                        <legend>Профіль</legend>
                        <div class="form-group">
                            <label for="firstName" class="col-lg-2 control-label">Ім’я</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="firstName" placeholder="Ім’я" value="<?php echo $_SESSION['firstName']; ?>" name="firstName">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lastName" class="col-lg-2 control-label">Прізвище</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="lastName" placeholder="Password" value="<?php echo $_SESSION['lastName']; ?>" name="lastName">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="select" class="col-lg-2 control-label">Стать</label>
                            <div class="col-lg-10">
                                <select class="form-control" id="select">
                                    <option value="male" selected="selected">Чоловіча</option>
                                    <option value="female">Жіноча</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="select" class="col-lg-2 control-label">Маршрут</label>
                            <div class="col-lg-10">
                                <select class="form-control" id="select">
                                    <?php include_once("../../ProfileController.php"); ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <button type="reset" class="btn btn-default">Cancel</button>
                                <button type="submit" class="btn btn-primary" name="save">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </main>
    </div>

    <footer>
        <?php include_once("../../assets/resources/Footer.php"); ?>
    </footer>
</body>
</html>
