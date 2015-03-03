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

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <fieldset>
            <legend>Зміна паролю:</legend>
            <input name="page" type="hidden" value="password" />
            <div>
                <div>
                    <label for="typeahead">Старий пароль:</label>
                </div>
                <input type="text" id="typeahead" name="old-password" />
            </div>

            <div>
                <div>
                    <label for="typeahead">Новий пароль:</label>
                </div>
                <input type="text" id="typeahead" name="new-password" />
            </div>

            <div>
                <div>
                    <label for="typeahead">Повторіть пароль:</label>
                </div>
                <input type="text" id="typeahead" name="repeat-new-password" />
            </div>

            <div>
                <label for="typeahead"></label>
                <button type="submit" name="save">Зберегти</button>
            </div>
            <?php include_once("../../ChangeController.php"); ?>
        </fieldset>
    </form>

    <hr>

    <footer>
        <p>© Company 2014</p>
    </footer>
</body>
</html>
