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

//echo $productsID . "<br/";

$allProductsNames->setName($productsID);
$allProductsNames->setAllProductsArray( $_SESSION["products"]);

$found = $controller->getSelectProduct($allProductsNames->getName() ,$allProductsNames->getAllProductsArray() );


echo $allProductsNames->getAllProductsArray()[$found]->name ."<br/>" . $allProductsNames->getAllProductsArray()[$found]->description ."<br/>" . $allProductsNames->getAllProductsArray()[$found]->price ;

//echo array_search(20,$arr,true);
//echo $customerID ;
?>
<!-- print customers-->
<?php echo $productsID ?>
<?php require 'includes/footer.php'?>
</body>
</html>
