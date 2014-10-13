<?php
function check() {
    if ($_POST['signin']) {
        header("Location: views/signin.php");
        die();
    } elseif ($_POST['signup']) {
        header("Location: views/signup.php");
        die();
    }
}