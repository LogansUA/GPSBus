<?php
include_once("DataBaseClass.php");

class LoginClass
{
    private
        $dataBase;

    public function __construct() {
        $this->dataBase = new DataBaseClass();
    }

    public function isAdmin($email) {
        $result = $this->dataBase->selectData('SELECT * FROM `Driver` WHERE `email`="' . $email . '"');
        $this->dataBase->closeConnect();
        while ($item = mysqli_fetch_array($result)) {
            $_SESSION['idDriver'] = $item['idDriver'];
            $_SESSION['firstName'] = $item['firstName'];
            $_SESSION['nickName'] = $item['nickName'];
            $_SESSION['email'] = $item['email'];
            $_SESSION['password'] = $item['password'];
            $_SESSION['group'] = $item['group'];

            if ($item['group'] == "admins") {
                return true;
            }
        }
        return false;
    }
} 