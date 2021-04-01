<?php 
    // Requiring database controller class funtions.
    require('Database/DBController.php');

    // Requiring product class.
    require('Database/product.php');

    // Requiring cart class.
    require('Database/cart.php');
    
    // Object of the class DBController.
    $db = new DBController();

    // Object of product class
    $product = new Product($db);
    $product_shuffle = $product->getData();

    // Object of Cart class
    $cart = new Cart($db);
?>