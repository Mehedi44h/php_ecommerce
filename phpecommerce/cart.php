<?php
ob_start();
include("header.php");
?>


<?php
$db =new DBController();
$Cart=new Cart($db);
$product =new Product($db);
/*  include cart items if it is not empty */
count($product->getData('cart')) ? include ('templates/_cart.php') :  include ('templates/notFound/_cart_notFound.php');
/*  include cart items if it is not empty */

/*  include top sale section */
count($product->getData('wishlist')) ? include ('templates/_wishlist-template.php') :  include ('templates/notFound/_wishlist_notFound.php');
/*  include top sale section */


/*  include top sale section */
include ('templates/_new-phones.php');
/*  include top sale section */

?>

<?php
include("footer.php");
?>