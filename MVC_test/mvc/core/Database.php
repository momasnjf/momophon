<?php
class Database
{
    public $con;
    public $serverName = "localhost";
    public $userName = "root";
    public $pass = "";
    public $dbName = "test";

    public function __construct()
    {
        $this->con = mysqli_connect($this->serverName, $this->userName, $this->pass);
        mysqli_select_db($this->con, $this->dbName);
        mysqli_query($this->con, "SET NAMES 'utf8'");
        // var_dump($this->con);
    }
}
?>