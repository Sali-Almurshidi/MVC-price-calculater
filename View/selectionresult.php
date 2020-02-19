<?php
declare(strict_types=1);
session_start();

require '../Model/User.php';
require '../Model/Customers.php';
require '../Model/Products.php';
require '../Model/Groups.php';
//include all your controllers here
require '../Controller/HomepageController.php';
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);
/*function whatIsHappening() {
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
}
whatIsHappening();*/


ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

function whatIsHappening() {
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
}

whatIsHappening();


$customerID = $_SESSION['customerID'];
$productsID = $_SESSION['productID'];


$allProductsNames = new  Products();
$allCustomerNames = new  Customers();
$controller = new HomepageController();
$allGroup = new Groups();
?>

<!doctype html>
<html  lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<?php require 'includes/header.php'?>
<!-- print product-->
<?php

$allProductsNames->setName($productsID);
$allProductsNames->setAllProductsArray( $_SESSION["products"]);

$foundProduct = $controller->getSelectProduct($allProductsNames->getName() ,$allProductsNames->getAllProductsArray() );


echo $allProductsNames->getAllProductsArray()[$foundProduct]->name ."<br/>" . $allProductsNames->getAllProductsArray()[$foundProduct]->description ."<br/>" . $allProductsNames->getAllProductsArray()[$foundProduct]->price ."<br/>";

?>
<!-- print customers-->
<?php echo " customer". $customerID ."<br/>" ;

$allCustomerNames->setName($customerID);
$allCustomerNames->setAllCustomersArray( $_SESSION["customers"]);

$foundCustomer = $controller->getCustomerGroubID($allCustomerNames->getName() ,$allCustomerNames->getAllCustomersArray() );
$allCustomerNames->setGroupId($allCustomerNames->getAllCustomersArray()[$foundCustomer]->group_id );

$allGroup->setId($allCustomerNames->getGroupId());
$controller->getGroupId($allGroup->getId(),$_SESSION["groups"] );
//echo  ;
?>
<?php require 'includes/footer.php'?>
</body>
</html>
