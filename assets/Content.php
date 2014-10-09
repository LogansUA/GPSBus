<?php
/**
 * Created by PhpStorm.
 * User: logans
 * Date: 09.10.14
 * Time: 10:37
 */

    require_once("Check.php");
    require_once("Header.php");

    $email = $_POST['email'];
    $password = $_POST['password'];

    //if ($_POST['signin']) {
        //$check = new Check($email, $password);
        //$check->helloUser();
    //}

    //function helloUser() {
        echo "<h2 class=". "form-signin-heading" .">" . "Hello " . $email . "!</h2>";
        echo "Works";
   // }
    //helloUser();
    echo "works!";
?>