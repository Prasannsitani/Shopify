<?php 
    require('Database/DBController.php');

    require('Database/product.php');
    
    // Object of the class DBController.
    $db = new DBController();

    // Object of product class
    $product = new Product($db);
?>