<?php
include_once(__DIR__ . "/../Redirect.php");

class CheckClass
{
    public function __construct() {

    }

    public function entryIntoService() {
        if (isset($_POST['signin'])) {
            htmlRedirect("../views/signin.php");
        } elseif (isset($_POST['signup'])) {
            htmlRedirect("../views/signup.php");
        }
    }

    public function isNewUser($email, $emailArray) {
        for ($i = 0; $i < count($emailArray); $i++) {
            if ($email == $emailArray[$i]) {
                return false;
            }
        }

        return true;
    }

    public function isRegistered($email, $emailArray, $password = array(), $passwordArray = array()) {
        for ($i = 0; $i < count($emailArray); $i++) {
            if (($emailArray[$i] == $email) && ($passwordArray[$i] == $password)) {
                return true;
            }
        }

        return false;
    }
}
