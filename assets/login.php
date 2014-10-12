<?php
class CUser
{
    private
        $email,
        $password;

    public
        $username;

        function __construct($email, $password) {
            $this->email = $email;
            $this->password = $password;
            $this->username = "Logans";
        }

        function isAdmin() {
            $email = "email@email";
            $password = "root";

            if (($this->email == $email) && ($this->password == $password)) {
                return true;
            }

            return false;
        }
}
