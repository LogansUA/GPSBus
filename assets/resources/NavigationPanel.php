<header>
    <?php
    $check = new CheckClass();

    $check->entryIntoService();
    ?>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="/index.php">GPS Bus</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li id="main-button" class="active"><a href="/views/index.php">Головна</a></li>
                    <?php
                    if ($_SESSION['group'] == 'admin') {
                        ?>
                        <li id="admin-panel-button"><a href="/views/Admin/index.php">Панель адміністратора</a></li>
                    <?php
                    }
                    ?>
                </ul>

                <?php
                if (!isset($_SESSION['idDriver'])) {
                ?>
                    <form class="navbar-form navbar-right" role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                        <button type="submit" class="btn btn-primary" name="signup" value="#">Зареєструватися</button>
                        <button type="submit" class="btn btn-success getawayfromme" name="signin" value="#">Вхід</button>
                    </form>
                <?php
                }
                ?>

                <form class="navbar-right" role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <?php
                    if (isset($_SESSION['idDriver'])) {
                    ?>
                        <a class="navbar-brand" href="/views/Account/profile.php">
                        <?php
                        echo $_SESSION['firstName'] . " " . $_SESSION['lastName'];
                        ?>
                        </a>
                    <?php
                    }

                    if (isset($_POST['exit'])) {
                        if (isset($_SESSION['idDriver'])) {
                            session_destroy();
                            phpRedirect('../index.php');
                        }
                    }

                    if (isset($_SESSION['idDriver'])) {
                        echo "<button type='submit' class='btn btn-danger' style='margin-top: 2%' name='exit'>Вихід</button>";
                    }
                    ?>
                </form>
            </div><!--/.navbar-collapse -->
        </div>
    </div>
</header>
