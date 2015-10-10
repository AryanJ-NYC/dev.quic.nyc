<?php
require_once("/storage/wwwroot/common/database.inc.php");
$database["database"] = $dbprefix . "quicweb";

class Database {
 
    private $host;
    private $user;
    private $pass;
    private $dbname;
    private $link;
    private $error;
    private $errno;
    private $query;
 
    function __construct($host, $user, $pass, $dbname = "", $conn = 1) {
        $this -> host = $host;
        $this -> user = $user;
        $this -> pass = $pass;
        if (!empty($dbname)) $this -> dbname = $dbname;      
        if ($conn == 1) $this -> connect();
    }
 
    function __destruct() {
        @mysql_close($this->link);
    }
 
    public function connect() {
        if ($this->link = mysql_connect($this -> host, $this -> user, $this -> pass)) {
            if (!empty($this -> dbname)) {
                if (!mysql_select_db($this -> dbname)) $this -> exception("Could not connect to the database!");
            }
			mysql_set_charset('utf8', $this -> link);
        } else {
            $this -> exception("Could not create database connection!");
        }
    }
 
    public function close() {
        @mysql_close($this->link);
    }
 
    public function query($sql) {
        if ($this->query = @mysql_query($sql)) {
            return $this->query;
        } else {
            $this->exception("Could not query database!");
            return false;
        }
    }
 
    public function num_rows($result) {
        if (empty($result)) {         
            $this->exception("Could not get number of rows because no query id was supplied!");
            return false;
        } else {
            return mysql_num_rows($result);
        }
    }
 
    public function fetch_array($result) {
        if (empty($result)) {
            $this->exception("Could not fetch array because no query id was supplied!");
            return false;
        } else {
            $data = mysql_fetch_array($result);
        }
        return $data;
    }
 
    public function fetch_array_assoc($result) {
        if (empty($result)) {
            $this->exception("Could not fetch array assoc because no query id was supplied!");
            return false;
        } else {
            $data = mysql_fetch_array($result, MYSQL_ASSOC);
        }
        return $data;
    }
 
    public function fetch_all_array($sql, $assoc = true) {
        $data = array();
        if ($result = $this->query($sql)) {
            if ($assoc) {
                while ($row = $this->fetch_array_assoc($result)) {
                    $data[] = $row;
                }
            } else {
                while ($row = $this->fetch_array($result)) {
                    $data[] = $row;
                }
            }
        } else {
            return false;
        }
        return $data;
    }
 
    public function last_id() {
        if ($id = mysql_insert_id()) {
            return $id;
        } else {
            return false;
        }
    }
 
    private function exception($message) {
		//global E_ERROR;
        if ($this->link) {
            $this->error = mysql_error($this->link);
            $this->errno = mysql_errno($this->link);
        } else {
            $this->error = mysql_error();
            $this->errno = mysql_errno();
        }
		throw new Exception($message . ". MySQL ERROR: " . $this->error . ". MySQL ERROR NO. " . $this->errno);
    }
}

$db = new Database($database["hostname"], $database["username"], $database["password"], $database["database"]);

// utility to check input for query
// NOTE: DONT use mysql_real_escape_string directly
function db_escape_string($value) {
	// Stripslashes
	if (get_magic_quotes_gpc()){
		$value = stripslashes($value);
	}
	// Quote if not a number
	if (!is_numeric($value)) {
		$value = mysql_real_escape_string($value);
	}
	return $value;
}

/*
// start database connection
$db = new Database('localhost', 'username', 'password', 'database_name');
// query database
$q = "SELECT * FROM articles ORDER BY id DESC";
$r = $db->query($q);
// if we have a result loop over the result
if ($db->num_rows($r) > 0) {
  while ($a = $db->fetch_array_assoc($r)) {
    echo "{$a['author']} wrote {$a['title']}\n";
  }
}
 
// fetch array of articles with less code
$q = "SELECT * FROM articles ORDER BY id DESC";
$a = $db->fetch_all_array($q);
if (!empty($a)) {
  foreach ($a as $k => $v) {
    echo "{$v['author']} wrote {$v['title']}\n";
  }
}
*/

?>

