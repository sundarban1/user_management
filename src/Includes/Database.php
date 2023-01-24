<?php

namespace Sundarban\Project\Includes;

class Database
{

    public $connection;

    public function __construct()
    {
        $this->connection = new \mysqli('localhost', 'admin', 'admin@123', 'user_mgmt');

        if ($this->connection->connect_errno) {
            echo "Failed to connect to MySQL: " . $this->connection->connect_error;
            exit();
        }
    }


    public function getSelect($sql, $rows = 'single')
    {
        $data = [];
        $result = $this->connection->query($sql);
        $row = $result->num_rows;

        if ($row > 0) {
            if ($rows == 'single') {
                return $result->fetch_assoc();
            } elseif($rows == 'multiple') {
                while ($row = $result->fetch_assoc()) {
                    $data[] = $row;
                }
                return $data;
            }
        }
    }

    public function testDB(){

    }

    public function hello(){

    }

    public function deleteRow($sql)
    {
       return $this->connection->query($sql);
    }

    public function updateRow($sql)
    {
        // echo extratech;
        $sql = "Delete from users where id = 1";
        $this->connection->query($sql);
    }

    public function insertRow($sql)
    {
        $this->connection->query($sql);
    }
}
