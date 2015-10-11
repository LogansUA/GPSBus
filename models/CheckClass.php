<?php
include_once("../assets/redirect.php");

class CheckClass
{
    public function __construct() {

    }

    public function entryIntoService() {
        if (isset($_POST['signin'])) {
            htmlRedirect("SignIn/signin.php");
        } elseif (isset($_POST['signup'])) {
            htmlRedirect("SignUp/signup.php");
        }
    }
}

