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

    Профіль

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <fieldset>
            <legend>Зміна імейлу:</legend>
            <div>
                <label for="typeahead">Старий імейл:</label>
                <div>
                    <input type="text"id="typeahead" name="oldEmail" />
                </div>
            </div>
            <div >
                <label for="typeahead">Новий імейл:</label>
                <div>
                    <input type="text" id="typeahead" name="newEmail" />
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
