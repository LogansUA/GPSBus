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

    <title>Авторизація</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <!-- FONTAWESOME STYLE CSS -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="../css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <script src="../js/ie-emulation-modes-warning.js"></script>
</head>

<body>
    <div class="container">
        <div class="row text-center pad-top ">
            <div class="col-md-12">
                <h2>Сторінка авторизації</h2>
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
                                <span class="input-group-addon">@</span>
                                <input type="text" class="form-control" autofocus="" placeholder="Your Email" name="email" />
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                <input type="password" class="form-control" placeholder="Enter Password" name="password" />
                            </div>
                            <?php
                            require_once('../assets/login.php');

                            if (isset($_POST['sign_in'])) {
                                $email = $_POST['email'];
                                $password = $_POST['password'];

                                $user = new CUser($email, $password);

                                if ($user->isAdmin()) {
                                    header("Location: ../views/index.php");
                                    die();
                                } else {
                                    ?>

                                    <div class="alert alert-danger" role="alert">
                                        <strong>Опа!</strong> Невірний Email, або пароль.
                                    </div>

                                <?php
                                }
                            }
                            ?>
                            <button class="btn btn-lg btn-primary btn-block" type="submit" name="sign_in" value="#">Авторизуватися</button>
                            <hr />
                            Ще не зареєстровані?  <a href="#" >Тоді вам сюди!</a>
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