<?php
include_once("../../assets/autoload.php");
include_once("../../assets/redirect.php");

session_start();
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <?php include_once("../../assets/resources/Header.php"); ?>
    <title>Зміна паролю</title>
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
                        <legend>Зміна паролю:</legend>

                        <input name="page" type="hidden" value="password" />

                        <div class="form-group">
                            <label for="old-password" class="col-lg-2 control-label">Старий пароль</label>
                            <div class="col-lg-10">
                                <input type="password" class="form-control" id="old-password" placeholder="Старий пароль" name="old-password">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="new-password" class="col-lg-2 control-label">Новий пароль</label>
                            <div class="col-lg-10">
                                <input type="password" class="form-control" id="new-password" placeholder="Новий пароль" name="new-password">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="repeat-new-password" class="col-lg-2 control-label">Повторіть пароль</label>
                            <div class="col-lg-10">
                                <input type="password" class="form-control" id="repeat-new-password" placeholder="Повторіть пароль" name="repeat-new-password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <button type="reset" class="btn btn-default">Cancel</button>
                                <button type="submit" class="btn btn-primary" name="save">Submit</button>
                            </div>
                        </div>
                        <?php include_once("../../ChangeController.php"); ?>
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
