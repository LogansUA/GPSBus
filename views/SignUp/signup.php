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
    <a href="../">
        <img class="exit-button" src="../../web/images/exit.svg" alt="Exit" />
    </a>
    <a href="<?php echo $_SERVER['PHP_SELF']; ?>" class="headText">Сторінка реєстрації</a>

    <strong>Реєстрація</strong>

    <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <br/>
            <input type="text" class="form-control" placeholder="Ім’я" name="firstName" />
            <input type="text" class="form-control" placeholder="Нікнейм" name="nickName" />
            <input type="text" class="form-control" placeholder="Email" name="email" />
            <input type="password" class="form-control" placeholder="Пароль" name="password" />
            <input type="password" class="form-control" placeholder="Повторіть пароль" name="rePassword" />
        <?php include_once("../../controllers/SignUpController.php"); ?>
        <button type="submit" name="sign_up" value="#">Зареєструватися</button>

        <hr />
        Вже зареєстровані? <a href="../SignIn/signin.php">Тоді заходьте!</a>
    </form>
</body>
</html>
