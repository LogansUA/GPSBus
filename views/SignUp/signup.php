<?php
include_once("../../assets/autoload.php");
include_once("../../assets/redirect.php");
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <?php include_once("../../assets/resources/Header.php"); ?>
    <title>Реєстрація</title>
</head>

<body>
    <div>
        <a href="../">
            <img class="exit-button" src="../../web/images/exit.svg" alt="Exit" />
        </a>
    </div>

    <div class="well bs-component" style="margin: 3% 35% 0 35%;">
        <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <fieldset>
                <legend><strong>Реєстрація</strong></legend>
                <div class="form-group">
                    <label for="firstName" class="col-lg-2 control-label">Ім’я</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="firstName" placeholder="Ім’я" name="first-name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastName" class="col-lg-2 control-label">Прізвище</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="lastName" placeholder="Прізвище" name="last-name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Імейл</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="inputEmail" placeholder="Імейл" name="email" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="col-lg-2 control-label">Пароль</label>
                    <div class="col-lg-10">
                        <input type="password" class="form-control" id="inputPassword" placeholder="Пароль" name="password" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="re-password" class="col-lg-2 control-label">Повторіть пароль</label>
                    <div class="col-lg-10">
                        <input type="password" class="form-control" id="re-password" placeholder="Повторіть пароль" name="re-password">
                    </div>
                </div>

                <div>
                    <?php include_once("../../SignUpController.php"); ?>
                </div>

                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button type="reset" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-primary" name="sign-up">Submit</button>
                    </div>
                </div>

                <hr />
                <p>Вже зареєстровані? <a href="../SignIn/signin.php">Тоді заходьте!</a></p>
            </fieldset>
        </form>
    </div>
</body>
</html>
