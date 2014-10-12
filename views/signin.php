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

    <title>GPSBus Signin</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/signin.css" rel="stylesheet">

    <script src="../js/ie-emulation-modes-warning.js"></script>
</head>

<body>
    <div class="container form-borders">

        <form class="form-signin" role="form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <h2 class="form-signin-heading">Please sign in</h2>
            <input class="form-control" placeholder="Email address" autofocus="" type="email" name="email">
            <input class="form-control" placeholder="Password" type="password" name="password">
            <label class="checkbox">
              <input value="remember-me" type="checkbox"> Remember me
            </label>
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
                <strong>Oh snap!</strong> Wrong Email or Password.
            </div>
                <?php
                        }
                    }
                ?>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="sign_in" value="#">Sign in</button>
        </form>

    </div> <!-- /container -->

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>