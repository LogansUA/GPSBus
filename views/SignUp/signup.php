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

<body style="padding-top: 0;">
    <div>
        <a href="../">
            <img class="exit-button" src="../images/exit.svg" alt="Exit" />
        </a>
    </div>

    <div class="container">
        <div class="row text-center pad-top">
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
                            include_once("../../controllers/SignUpController.php");
                            ?>
                            <button class="btn btn-lg btn-primary btn-block" type="submit" name="sign_up" value="#">Зареєструватися</button>

                            <hr />
                            Вже зареєстровані? <a href="../SignIn/signin.php">Тоді заходьте!</a>
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
