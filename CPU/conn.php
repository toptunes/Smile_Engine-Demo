<?php

if(!defined('24647ETW$@^&@%@%*#')) {
   die('error 24');
}
 
class jjson {
        public static function jsonToDebug($jsonText = '')
    {
        $arr = json_decode($jsonText, true);
        $html = "";
        if ($arr && is_array($arr)) {
            $html .= self::_arrayToHtmlTableRecursive($arr);
        }
        return $html;
    }

    private static function _arrayToHtmlTableRecursive($arr) {
        $str = "<table><tbody>";
        foreach ($arr as $key => $val) {
            $str .= "<tr>";
            $str .= "<td>$key</td>";
            $str .= "<td>";
            if (is_array($val)) {
                if (!empty($val)) {
                    $str .= self::_arrayToHtmlTableRecursive($val);
                }
            } else {
                $str .= "<strong>$val</strong>";
            }
            $str .= "</td></tr>";
        }
        $str .= "</tbody></table>";

        return $str;
    }
    
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
        if ($this->conn->connect_error) {
         return "Connection failed: " . $this->conn->connect_error;
        }
    }

public function update_sql($sql)
    {

 mysqli_query($this->conn,"SET NAMES utf8");
      
if ($this->conn->query($sql) === TRUE) {
  return "1";
} else {
  return $sql."<msg></msg>".$conn->error;
}

}

public function read_sql($sql)
    {
 mysqli_query($this->conn,"SET NAMES utf8");
      

$result = $this->conn->query($sql);

if(isset($result->num_rows) && $result->num_rows >0){

$rows = $result->fetch_all(MYSQLI_ASSOC);
$all= json_encode($rows);
return $all;
} else {
  return "<msg>0 results</msg>";
}



}

public function insert_sql($sql)
    {
       

 mysqli_query($this->conn,"SET NAMES utf8");
      
if ($this->conn->query($sql) === TRUE) {
  return "1";
} else {
  return $sql.$conn->error."<msg>$conn->error</msg>".$conn->error;
}


}





}





 










/*
public function readdata($sql){
    
    $sql = "SELECT * FROM `quiz`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
    //echo "id: " . $row["id"]. " - Question: " . $row["Question"]. " " . $row["answer1"]. "<br>";
    $Question = urldecode($row["Question"]);
   
   
     $answer1 = urldecode($row["answer1"]);
   
     $answer2 = urldecode($row["answer2"]);
  
     $answer3 = urldecode($row["answer3"]);
  
     $answer4 = urldecode($row["answer4"]);
    
  }
} else {
  echo "0 results";
}
    
    
}






}
*/