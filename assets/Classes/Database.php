<?php
require_once("../Config/app_config.php");

class Database
{
    private
        $db;

    public function __construct() {
        $connectInfo = getConnectInfo();

        $this->db = mysqli_connect($connectInfo['host'],
            $connectInfo['user'],
            $connectInfo['password'],
            $connectInfo['database']) or
            die("Connection error! " . mysqli_connect_error());
    }

    public function selectData($query) {
        $result = $this->db->query($query) or
            die("Query error! " . mysqli_error($this->db));
        return $result;
    }

    public function insertData($query) {
        $this->db->query($query) or
            die("Insert query error! " . mysqli_error($this->db));
    }
}