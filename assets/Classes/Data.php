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

        function __construct() {
            $this->controller = new Database();
        }

        function selectFirstName() {
            $this->firstName[] = array();

            $result = $this->controller->selectData('SELECT `firstName` FROM `Driver`');
            $i = 0;

            while ($item = mysqli_fetch_array($result)) {
                $this->firstName[$i] = $item['firstName'];
                $i++;
            }
        }
        function selectNickName() {
            $this->nickName[] = array();

            $result = $this->controller->selectData('SELECT `nickName` FROM `Driver`');
            $i = 0;

            while ($item = mysqli_fetch_array($result)) {
                $this->nickName[$i] = $item['nickName'];
                $i++;
            }
        }
        function selectEmail() {
            $this->email[] = array();

            $result = $this->controller->selectData("SELECT `email` FROM `Driver`");
            $i = 0;

            while ($item = mysqli_fetch_array($result)) {
                $this->email[$i] = $item['email'];
                $i++;
            }
        }
        function selectPassword() {
            $this->password[] = array();

            $result = $this->controller->selectData('SELECT `password` FROM `Driver`');
            $i = 0;

            while ($item = mysqli_fetch_array($result)) {
                $this->password[$i] = $item['password'];
                $i++;
            }
        }
        function isRegistered($email, $password) {
            for ($i = 0; $i < count($this->email); $i++) {
                if (($this->email[$i] == $email) && ($this->password[$i] == $password)) {
                    return true;
                }
            }

            return false;
        }
} 