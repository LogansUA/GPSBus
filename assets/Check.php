<?php
function check() {

    $registration = $_POST['signup'];
    $login = $_POST['signin'];

    if ($login == "login") {
        header("Location: views/signin.php");
        die();
    } elseif ($registration == "registration") {
        header("Location: views/signup.php");
        die();
    }
}