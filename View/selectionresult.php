<?php
declare(strict_types=1);

ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);
//include all your model files here

require '../Model/User.php';
require '../Model/Customers.php';
require '../Model/Products.php';
require '../Model/Groups.php';
//include all your controllers here
require '../Controller/HomepageController.php';
session_start();

//$customerID = $_SESSION['customerID'];
//$productsID = $_SESSION['productID'];
$customerID = 0 ;
$productsID = 0 ;
?>

<!doctype html>
<html  lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<?php echo ("fksdjflakefakln"); ?>
<?php require 'includes/header.php'?>
<!-- print product-->
<?php ?>
<!-- print customers-->
<?php ?>
<?php require 'includes/footer.php'?>
</body>
</html>
