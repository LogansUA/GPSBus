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
        <fieldset>
            <legend>Інформація</legend>
            <div>
                <div>
                    <label for="first-name">Ім’я</label>
                </div>
                <input id="first-name" type="text" name="first-name" />
            </div>

            <div>
                <div>
                    <label for="last-name">Прізвище</label>
                </div>
                <input id="last-name" type="text" name="last-name" />
            </div>

            <div>
                <div>
                    <label for="email">Імейл</label>
                </div>
                <input id="email" type="text" name="email" />
            </div>

            <div>
                <div>
                    <label for="password">Пароль</label>
                </div>
                <input id="password" type="password" name="password" />
            </div>

            <div>
                <div>
                    <label for="re-password">Повторіть пароль</label>
                </div>
                <input id="re-password" type="password"  name="re-password" />
            </div>
            <?php include_once("../../SignUpController.php"); ?>
            <button type="submit" name="sign_up" value="#">Зареєструватися</button>
        </fieldset>
        <hr />
        Вже зареєстровані? <a href="../SignIn/signin.php">Тоді заходьте!</a>
    </form>
</body>
</html>
