<?php
    function check() {
        if (isset($_POST['signin'])) {
            header("Location: views/signin.php");
            die();
        } elseif (isset($_POST['signup'])) {
            header("Location: views/signup.php");
            die();
        }
    }