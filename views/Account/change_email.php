<?php
include_once("../../assets/autoload.php");
include_once("../../assets/redirect.php");

session_start();
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <?php include_once("../../assets/resources/Header.php"); ?>
    <title>Зміна імейлу</title>
</head>

<body>
    <?php include_once("../../assets/resources/NavigationPanel.php"); ?>
    <?php include_once("../../assets/resources/left_navbar.php"); ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <fieldset>
            <legend>Зміна імейлу:</legend>
            <input name="page" type="hidden" value="email" />
            <div>
                <div>
                    <label for="typeahead">Старий імейл:</label>
                </div>
                <input type="text" id="typeahead" name="old-email" />
            </div>
            <div>
                <div>
                    <label for="typeahead">Новий імейл:</label>
                </div>
                <input type="text" id="typeahead" name="new-email" />
            </div>
            <button type="submit" name="save">Зберегти</button>
            <?php include_once("../../ChangeController.php"); ?>
        </fieldset>
    </form>

    <hr>

    <footer>
        <p>© Company 2014</p>
    </footer>
</body>
</html>
