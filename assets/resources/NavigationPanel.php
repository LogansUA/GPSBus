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
                    <li class="active"><a href="/views/index.php">Головна</a></li>
                    <li><a href="#">Про нас</a></li>
                    <li><a href="#">Зворотній зв’язок</a></li>
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
                        echo "<a class='navbar-brand' href='/views/Account/profile.php'>" .
                                 $_SESSION['firstName'] . " " . $_SESSION['lastName'] .
                             "</a>";
                    }

                    if (isset($_POST['exit'])) {
                        if (isset($_SESSION['idDriver'])) {
                            session_destroy();
                            /* TODO: Create normal redirect from profile to home */
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
