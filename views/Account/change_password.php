<?php
include_once("../../assets/autoload.php");
include_once("../../assets/redirect.php");

session_start();
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <?php include_once("../../assets/resources/Header.php"); ?>
    <title>Зміна паролю</title>
</head>

<body>
    <?php include_once("../../assets/resources/NavigationPanel.php"); ?>
    <?php include_once("../../assets/resources/left_navbar.php"); ?>

    Профіль
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <fieldset>
            <legend>Зміна паролю:</legend>
            <div>
                <label for="typeahead">Старий пароль:</label>
                <div>
                    <input type="text" id="typeahead" name="oldPassword" />
                </div>
            </div>
            <div>
                <label for="typeahead">Новий пароль:</label>
                <div>
                    <input type="text" id="typeahead" name="newPassword" />
                </div>
            </div>
            <div>
                <label for="typeahead">Повторіть пароль:</label>
                <div>
                    <input type="text" id="typeahead" name="repeatNewPassword" />
                </div>
            </div>
            <div>
                <label for="typeahead"></label>
                <div>
                    <button type="submit" name="save">Зберегти</button>
                </div>
            </div>
            <?php include_once("../../controllers/ChangeController.php"); ?>
        </fieldset>
    </form>

    <hr>

    <footer>
        <p>© Company 2014</p>
    </footer>
</body>
</html>
