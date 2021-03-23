<?php 

class DBController {
    protected $host = 'localhost';
    protected $username = 'root';
    protected $password = '';
    protected $database = 'shopifyDB';

    // Connection Variable initialization.
    public $connect = null;

    // Constructor to establish the connection each time the controller object is created.
    public function __construct() {
        $this->connect = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if($this->connect->connect_error) {
            echo "Fail" . $this->connect->connect_error;
        }
        // echo "Database Connection Established...";
    }

    public function __destruct() {
        // echo "Destructor is called";
        $this->closeConnection();
    }

    protected function closeConnection() {
        if($this->connect != null) {
            $this->connect->close();
            $this->connect = null;
        }
    }
}
?>