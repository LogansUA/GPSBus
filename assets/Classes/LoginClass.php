<?php
include_once("DataBaseClass.php");

class Login
{
    private
        $dataBase;

    public function __construct() {
        $this->dataBase = new Database();
    }

    public function isAdmin($email) {
        $result = $this->dataBase->selectData('SELECT * FROM `Driver` WHERE `email`="' . $email . '"');
        $this->dataBase->closeConnect();
        while ($item = mysqli_fetch_array($result)) {
            $_SESSION['idDriver'] = $item['idDriver'];
            $_SESSION['nickName'] = $item['nickName'];
            $_SESSION['group'] = $item['group'];

            if ($item['group'] == "admins") {
                return true;
            }
        }
        return false;
    }
} 