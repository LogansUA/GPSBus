<?php
/**
 * Created by PhpStorm.
 * User: logans
 * Date: 09.10.14
 * Time: 0:24
 */

class Check {
    private $email;
    private $password;

    function __construct($incmEmail, $incmPassword) {
        $this->$email = $incmEmail;
        $this->$password = $incmPassword;
    }

    public function helloUser() {
        echo "<h2 class=". "form-signin-heading" .">" . "Hello " . $this->$email . "!</h2>";
        echo "Works";
    }
}

?>