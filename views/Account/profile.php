<?php
include_once("../../assets/autoload.php");
include_once("../../assets/redirect.php");

session_start();
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <?php include_once("../../assets/resources/Header.php"); ?>
    <title>Профіль</title>
</head>

<body>
    <?php include_once("../../assets/resources/NavigationPanel.php"); ?>
    <?php include_once("../../assets/resources/left_navbar.php"); ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <fieldset>
            <legend>Інформація</legend>
            <div>
                <label for="typeahead">Ім’я:</label>
                <div>
                    <input type="text" id="typeahead" value="<?php echo $_SESSION['firstName']; ?>" name="firstName" />
                </div>
            </div>
            <div>
                <label for="typeahead">Прізвище:</label>
                <div>
                    <input type="text" id="typeahead" value="<?php echo $_SESSION['lastName']; ?>" name="lastName" />
                </div>
            </div>
            <div>
                <label for="select02">Стать:</label>
                <div>
                    <select id="select02">
                        <option value="none">Невизначено</option>
                        <option value="male">Чоловіча</option>
                        <option value="female">Жіноча</option>
                    </select>
                </div>
            </div>
            <div>
                <label for="select02">Маршрут:</label>
                <div>
                    <select id="select02">
                        <?php include_once("../../ProfileController.php"); ?>
                    </select>
                </div>
            </div>
            <div>
                <label for="typeahead"></label>
                <div>
                    <button type="submit" name="save">Зберегти</button>
                </div>
            </div>
        </fieldset>
    </form>

    <hr>

    <footer>
        <p>© Company 2014</p>
    </footer>
</body>
</html>
