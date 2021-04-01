<?php 

class Cart {
    public $db = null;

    // Check if the connection is established or not.
    public function __construct(DBController $db) {
        if(!isset($db->connect)) return null;
        $this->db = $db;
    }

    //insert into Cart Table.
    public function insertIntoCart($params = null, $table = 'cart') {
        if($this->db->connect != null) {
            if($params != null) {
                $columns = implode(',', array_keys($params));
                $values = implode(',', array_values($params));

                // Insert Sql Query
                $query_string = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);

                // Execute this query string
                $result = $this->db->connect->query($query_string);
                return $result;
            }
        }
    }

    public function addToCart($userid, $itemid) {
        // echo "User id : ".$userid."<br>";
        // echo "Item id : ".$itemid;
        if(isset($userid) && isset($itemid)) {
            $params = array(
                'user_id' => $userid,
                'item_id' => $itemid
            );
        }

        $result = $this->insertIntoCart($params);
        if($result) {
             // This line is used to reload the page and refreshed the data.
            header('Location:', $_SERVER['PHP_SELF']); 
        }
    }
}

?>