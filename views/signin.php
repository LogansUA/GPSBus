<?php
function __autoload($className) {
    require(__DIR__ . "/../assets/Classes/" . $className . ".php");
}

session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include "../assets/Resources/Header.php"; ?>
        <title>Авторизація</title>
    </head>

    <body style="padding-top: 0;">
        <div class="container">
            <div class="row text-center pad-top ">
                <div class="col-md-12">
                    <h2><a href="<?php echo $_SERVER['PHP_SELF']; ?>" class="headText">Сторінка авторизації</a></h2>
                </div>
            </div>
            <div class="row  pad-top">

                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>Авторизація</strong>
                        </div>
                        <div class="panel-body">
                            <form class="form-signin" role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                <br/>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="email">@</i></span>
                                    <input type="text" class="form-control" autofocus="" placeholder="Email" name="email" />
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock lock"></i></span>
                                    <input type="password" class="form-control" placeholder="Пароль" name="password" />
                                </div>
                                <?php

                                if (isset($_POST['sign_in'])) {
                                    $email = $_POST['email'];
                                    $password = $_POST['password'];

                                    $correctEmail = true;
                                    $correctPassword = true;

                                    $messages = new MessagesClass();
                                    $check = new CheckClass();
                                    $driver = new DriverClass();
                                    $login = new LoginClass();

                                    $driverEmailArray = $driver->getEmail();
                                    $driverPasswordArray = $driver->getPassword();

                                    $isRegistered = $check->isRegistered($email, $driverEmailArray,
                                                                         $password, $driverPasswordArray);

                                    if (!empty($email) && !empty($password)) {
                                        if ($isRegistered) {
                                            if ($login->isAdmin($email)) {
                                                htmlRedirect("admin_panel/index.php");
                                            } else {
                                                htmlRedirect("index.php");
                                            }
                                        } else {
                                            $messages->getErrorBar("Невірний пароль, або імейл.");
                                        }
                                    } else {
                                        $messages->getErrorBar("Не всі поля заповнені.");
                                    }
                                }
                                ?>
                                <button class="btn btn-lg btn-success btn-block" type="submit" name="sign_in" value="#">Авторизуватися</button>
                                <hr />
                                <p>Ще не зареєстровані?  <a href="signup.php" >Тоді реєструйтесь!</a></p>
                                <p>Не можете згадати дані? <a href="#">Відновіть їх.</a></p>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../js/ie10-viewport-bug-workaround.js"></script>

    </body>
</html>