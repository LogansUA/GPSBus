<?php
include_once("../assets/Classes/DataBaseClass.php");
include_once("../assets/Classes/MessagesClass.php");
include_once("../assets/Classes/CheckClass.php");
include_once("../assets/Classes/DriverClass.php");
include_once("../assets/Classes/Redirect.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../images/icon.png">
        <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
        <title>Реєстрація</title>

        <!-- BOOTSTRAP CORE STYLE CSS -->
        <link href="../css/bootstrap.css" rel="stylesheet" />
        <link href="../css/font-awesome.min.css" rel="stylesheet" />
        <link href="../css/style.css" rel="stylesheet" />

        <!-- GOOGLE FONT -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

        <script src="../js/ie-emulation-modes-warning.js"></script>
    </head>

    <body>
        <div class="container">
            <div class="row text-center pad-top ">
                <div class="col-md-12">
                    <h2><a href="<?php echo $_SERVER['PHP_SELF']; ?>" class="headText">Сторінка реєстрації</a></h2>
                </div>
            </div>

            <div class="row  pad-top">
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>Реєстрація</strong>
                        </div>
                        <div class="panel-body">
                            <form class="form-signin" role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                <br/>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-circle-o-notch name"  ></i></span>
                                    <input type="text" class="form-control" placeholder="Ім’я" name="firstName" />
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-tag tag"  ></i></span>
                                    <input type="text" class="form-control" placeholder="Нікнейм" name="nickName" />
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="email">@</i></span>
                                    <input type="text" class="form-control" placeholder="Email" name="email" />
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock lock"  ></i></span>
                                    <input type="password" class="form-control" placeholder="Пароль" name="password" />
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock lock"  ></i></span>
                                    <input type="password" class="form-control" placeholder="Повторіть пароль" name="rePassword" />
                                </div>

                                <?php
                                if (isset($_POST['sign_up'])) {
                                    $firstName = $_POST['firstName'];
                                    $nickName = $_POST['nickName'];
                                    $email = $_POST['email'];
                                    $password = $_POST['password'];
                                    $rePassword = $_POST['rePassword'];

                                    $database = new Database();
                                    $messages = new Messages();
                                    $check = new Check();
                                    $driver = new Driver();

                                    if (!empty($firstName) &
                                        !empty($nickName)  &
                                        !empty($email)     &
                                        !empty($password)  &
                                        !empty($rePassword)) {

                                        if ($check->isNewUser($email, $driver->getEmail())) {

                                            if ($password == $rePassword) {
                                                $database->insertData("INSERT INTO `Driver`(`firstName`, `nickName`, `email`, `password`)
                                                                   VALUES ('$firstName', '$nickName', '$email', '$password')");
                                                htmlRedirect("signin.php");
                                            } else {
                                                $messages->getErrorBar("Паролі повинні співпадати.");
                                            }
                                        } else {
                                            $messages->getErrorBar("Email $email вже зареєстрований.");
                                        }

                                    } else {
                                        $messages->getErrorBar("Ви ввели не всі дані.");
                                    }
                                    $database->closeConnect();
                                }
                                ?>

                                <button class="btn btn-lg btn-primary btn-block" type="submit" name="sign_up" value="#">Зареєструватися</button>

                                <hr />
                                Вже заєстровані? <a href="signin.php">Тоді заходьте!</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
        <script src="../js/jquery-1.10.2.js"></script>
        <!-- BOOTSTRAP SCRIPTS  -->
        <script src="../js/bootstrap.js"></script>

    </body>
</html>
