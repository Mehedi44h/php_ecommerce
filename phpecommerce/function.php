 <?php

// require MySQL Connection
require ('database/DBController.php');

// require Product Class
require ('database/product.php');

require ('database/Cart.php');



// DBController object
$db = new DBController();

// Product object
//$product = new Product($db);
 $product= new Product($db);
 $product_shuffle =$product->getData();

 //print_r($product->getData());
$Cart=new Cart($db);
//print_r();



