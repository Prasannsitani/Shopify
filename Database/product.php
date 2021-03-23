<?php 

class Product {
    public $db = null;

    public function __construct(DBController $db) {
        if(!isset($db->connect)) {
            return null;
        }
        $this->db = $db;
    }

    // Function to fetch the data from the database.
    public function getData($table = 'product') {
        $result = $this->db->connect->query(query : "SELECT * FROM {$table}");

        $resultArray = array(); // Declaring empty array to storing all the result items

        // Fetch product data one by one.
        while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }

        return $resultArray;
    }


}

?>