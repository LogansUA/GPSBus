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

<body style="padding-top: 0;">
    <a href="../">
        <img class="exit-button" src="../../web/images/exit.svg" alt="Exit" />
    </a>
    <a href="<?php echo $_SERVER['PHP_SELF']; ?>">Сторінка авторизації</a>

    <strong>Авторизація</strong>
    <form class="form-signin" role="form" name="signin" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="return checkForm()" >
        <br/>
        <input type="text" autofocus="" placeholder="Email" name="email" />
        <input type="password" placeholder="Пароль" name="password" />

        <div id="message">
            <?php include_once("../../controllers/SignInController.php"); ?>
        </div>

        <button type="submit" name="sign_in" value="#">Авторизуватися</button>
        <hr />
        <p>Ще не зареєстровані?  <a href="../SignUp/signup.php" >Тоді реєструйтесь!</a></p>
        <p>Не можете згадати дані? <a href="#">Відновіть їх.</a></p>
    </form>
</body>
</html>
