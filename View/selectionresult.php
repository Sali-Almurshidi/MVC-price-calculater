<?php
declare(strict_types=1);
session_start();

require '../Model/User.php';
require '../Model/Customers.php';
require '../Model/Products.php';
require '../Model/Groups.php';
//include all your controllers here
require '../Controller/HomepageController.php';

$customerID = $_SESSION['customerID'];
$productsID = $_SESSION['productID'];

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
<?php echo $customerID ;?>
<!-- print customers-->
<?php echo $productsID ?>
<?php require 'includes/footer.php'?>
</body>
</html>
