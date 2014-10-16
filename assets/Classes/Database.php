<?php
/**
 * Created by PhpStorm.
 * User: logans
 * Date: 16.10.14
 * Time: 19:39
 */
require_once('app_config.php');

class Database {
    private
        $db;

    public
        function __construct() {
            $connect = new Connect();
            $connectInfo = $connect->getConnectionInfo();

            $this->db = mysqli_connect($connectInfo['host'],
                $connectInfo['user'],
                $connectInfo['password'],
                $connectInfo['database']) or
                die("Connection error! " . mysqli_connect_error());
        }

        function selectData($query) {
            $result = $this->db->query($query) or
                die("Query error! " . mysqli_error($this->db));
            return $result;
        }

        function insertData($query) {
            $this->db->query($query);
        }
} 