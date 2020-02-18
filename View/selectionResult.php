<?php
declare(strict_types=1);

//include all your model files here
//require 'Model/*';
//include all your controllers here
require 'Controller/HomepageController.php';
session_start();

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
<?php ?>
<!-- print customers-->
<?php ?>
<?php require 'includes/footer.php'?>
</body>
</html>
