<?php
class Check {
    public function __construct() {

    }

    public function entryIntoService() {
        if (isset($_POST['signin'])) {
            header("Location: ../views/signin.php");
            die();
        } elseif (isset($_POST['signup'])) {
            header("Location: ../views/signup.php");
            die();
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

