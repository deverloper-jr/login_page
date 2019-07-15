<?php
namespace model;

use config;
//require '../config/config.php';

class dbConnection
{
    public function connect()
    {
        $conn = mysqli_connect("localhost", "root", "", "my_db");
        if ($conn) {
            return $conn;
        } else {
            die("Fail to query database " . mysqli_error());
        }
    }
}