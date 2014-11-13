<?php
class DataBaseClass
{
    private
        $db;

    public function __construct() {
        $connectInfo = $this->getConnectInfo();

        $this->db = mysqli_connect($connectInfo['host'],
            $connectInfo['user'],
            $connectInfo['password'],
            $connectInfo['database']) or
            die("Connection error! " . mysqli_connect_error());

        $this->insertData('SET charset utf8');
        $this->insertData('SET names utf8');
        $this->insertData('SET character_set_client="utf8"');
        $this->insertData('SET character_set_connection="utf8"');
        $this->insertData('SET character_set_results="utf8"');
    }

    public function __destruct() {
        $this->db->close();
    }

    public function selectData($query) {
        $result = $this->db->query($query) or
            die("Select query error! " . mysqli_error($this->db));
        return $result;
    }

    public function insertData($query) {
        $this->db->query($query) or
            die("Insert query error! " . mysqli_error($this->db));
        return 0;
    }

    private function getConnectInfo() {
        return $array = array(
            'host' => 'localhost',
            'user' => 'root',
            'password' => '2g0e0l4o2004',
            'database' => 'GPS Bus'
        );
    }
}