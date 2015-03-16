<?php
include_once("../../assets/autoload.php");
include_once("../../assets/redirect.php");

session_start();
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <?php include_once("../../assets/resources/Header.php"); ?>
    <title>Авторизація</title>
</head>

<body>
    <div>
        <a href="../">
            <img class="exit-button" src="../../web/images/exit.svg" alt="Exit" />
        </a>
    </div>

    <div class="well bs-component" style="margin: 6% 35% 0 35%;">
        <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="return checkForm()">
            <fieldset>
                <legend><strong>Авторизація</strong></legend>
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

                <div>
                    <?php include_once("../../SignInController.php"); ?>
                </div>

                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button type="reset" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-primary" name="sign-in">Submit</button>
                    </div>
                </div>

                <hr />
                <p>Ще не зареєстровані?  <a href="../SignUp/signup.php" >Тоді реєструйтесь!</a></p>
                <p>Не можете згадати дані? <a href="#">Відновіть їх.</a></p>
            </fieldset>
        </form>
    </div>
</body>
</html>
