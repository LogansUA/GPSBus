<?php
/**
 * Created by PhpStorm.
 * User: logans
 * Date: 16.10.14
 * Time: 19:49
 */
require_once("Database.php");

class Data {
    private
        $controller;

    public
        $firstName,
        $nickName,
        $email,
        $password;

    public function __construct() {
        $this->controller = new Database();
        $this->selectNickName();
        $this->selectEmail();
        $this->selectPassword();
    }

    private function selectFirstName() {
        $this->firstName[] = array();

        $result = $this->controller->selectData('SELECT `firstName` FROM `Driver`');
        $i = 0;

        while ($item = mysqli_fetch_array($result)) {
            $this->firstName[$i] = $item['firstName'];
            $i++;
        }
    }
    private function selectNickName() {
        $this->nickName[] = array();

        $result = $this->controller->selectData('SELECT `nickName` FROM `Driver`');
        $i = 0;

        while ($item = mysqli_fetch_array($result)) {
            $this->nickName[$i] = $item['nickName'];
            $i++;
        }
    }
    private function selectEmail() {
        $this->email[] = array();

        $result = $this->controller->selectData("SELECT `email` FROM `Driver`");
        $i = 0;

        while ($item = mysqli_fetch_array($result)) {
            $this->email[$i] = $item['email'];
            $i++;
        }
    }
    private function selectPassword() {
        $this->password[] = array();

        $result = $this->controller->selectData('SELECT `password` FROM `Driver`');
        $i = 0;

        while ($item = mysqli_fetch_array($result)) {
            $this->password[$i] = $item['password'];
            $i++;
        }
    }

    public function isRegistered($email, $password) {
        for ($i = 0; $i < count($this->email); $i++) {
            if (($this->email[$i] == $email) && ($this->password[$i] == $password)) {
                return true;
            }
        }

        return false;
    }

    public function getError($message) {
    ?>
        <div class="alert alert-danger" role="alert">
            <strong>Опа!</strong> <?php echo $message; ?>
        </div>
    <?php
    }

    public function getRegistredMessage() {
    ?>
        <div class="alert alert-success" role="alert">
            <strong>Чудово!</strong> Ви вдачно зареєструвалися.
        </div>
    <?php
    }

    public function isNewUser($email) {
        for ($i = 0; $i < count($this->email); $i++) {
            if ($email == $this->email[$i]) {
                return false;
            }
        }

        return true;
    }
} 