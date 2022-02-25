<?php
if (!defined('24647ETW$@^&@%@%*#'))
{
    die('error 24');
}


class conn
{

    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $sql_q;
    public $conn;

    public function __construct()
    {

    }

    public function getDBready()
    {

        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "abyekiha_app";

        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error)
        {
            return "Connection failed: " . $this
                ->conn->connect_error;
        }
    }

    public function update_sql($sql)
    {

        mysqli_query($this->conn, "SET NAMES utf8");

        if ($this->conn->query($sql) === true)
        {
            return "1";
        }
        else
        {
            return $sql . "<msg></msg>" . $conn->error;
        }

    }

    public function read_sql($sql)
    {
        mysqli_query($this->conn, "SET NAMES utf8");

        $result = $this->conn->query($sql);

        if (isset($result->num_rows) && $result->num_rows > 0)
        {

            $rows = $result->fetch_all(MYSQLI_ASSOC);
            $all = json_encode($rows);
            return $all;
        }
        else
        {
            return "<msg>0 results</msg>";
        }

    }

    public function insert_sql($sql)
    {

        mysqli_query($this->conn, "SET NAMES utf8");

        if ($this->conn->query($sql) === true)
        {
            return "1";
        }
        else
        {
            return $sql . $conn->error . "<msg>$conn->error</msg>" . $conn->error;
        }

    }

}


