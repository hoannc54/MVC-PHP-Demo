<?php

namespace Core;

use PDO;

/**
 * Base model
 *
 */
abstract class Model
{
    protected $conn;

    public $table;

    public function __construct()
    {
        $this->conn = $this->connect();
    }


    private function connect(){
        $con = mysqli_connect(Config::get('database.host'),Config::get('database.username'),Config::get('database.password'),Config::get('database.database'));

        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        return $con;

    }

    public function select(){
        $sql = "SELECT * FROM $this->table";

        $result = $this->query($sql);


        return $this->getArray($result);
    }

    public function query($sql){
        $result = mysqli_query($this->conn, $sql);

        return $result;
    }

    public function getArray($result){
        $data = [];
        while($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        return $data;
    }
    
}
