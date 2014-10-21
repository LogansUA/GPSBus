<?php
include_once("DataBaseClass.php");

class Driver
{
    private
        $controller;

    public function __construct() {
        $this->controller = new Database();
    }

    public function getFirstName() {
        $firstName[] = array();
        $result = $this->controller->selectData('SELECT `firstName` FROM `Driver`');
        $i = 0;
        while ($item = mysqli_fetch_array($result)) {
            $firstName[$i] = $item['firstName'];
            $i++;
        }

        return $firstName;
    }

    public function getNickName() {
        $nickName[] = array();
        $result = $this->controller->selectData('SELECT `nickName` FROM `Driver`');
        $i = 0;
        while ($item = mysqli_fetch_array($result)) {
            $nickName[$i] = $item['nickName'];
            $i++;
        }

        return $nickName;
    }

    public function getEmail() {
        $email[] = array();
        $result = $this->controller->selectData('SELECT `email` FROM `Driver`');
        $i = 0;
        while ($item = mysqli_fetch_array($result)) {
            $email[$i] = $item['email'];
            $i++;
        }

        return $email;
    }

    public function getPassword() {
        $password[] = array();
        $result = $this->controller->selectData('SELECT `password` FROM `Driver`');
        $i = 0;
        while ($item = mysqli_fetch_array($result)) {
            $password[$i] = $item['password'];
            $i++;
        }

        return $password;
    }
}