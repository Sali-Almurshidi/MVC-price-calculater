<?php
declare(strict_types=1);

ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

$allNames = new  HomepageController();

//var_dump($allCustomersArray["0"]['name']);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>MVC</title>
</head>
<body>

    <?php require 'includes/header.php'?>

    <?php require 'includes/footer.php'?>
    <div class = "row">
        <div class = "col-4 bg-info">
            <div  class="dropdown">
                <p> Select your customer</p>
                <select name="Customer"  onchange="customerSelect()" id="selectCustomer">
                    <option value='Not Available'>Customers Name</option>
                    <?php  $allNames->displayCustomerName(); ?>
                </select>
                <p id="resultCustomer"> </p>
            </div>
        </div>
        <div class = "col-4 bg-info">
            <div class="dropdown">
                <p> Select your products </p>
                <select name="Product" onchange="productSelect()" id="selectProducts" >
                    <option value='Not Available'>Products Name</option>
                    <?php  $allNames->displayProductsName(); ?>
                </select>
                <p id="resultProduct"> </p>
            </div>
        </div>
    </div>

    <script>
        function customerSelect() {
            var x = document.getElementById("selectCustomer").value;
            document.getElementById("resultCustomer").innerHTML = "You selected: " + x;
        }
        function productSelect() {
            var y = document.getElementById("selectProducts").value;
            document.getElementById("resultProduct").innerHTML = "You selected: " + y;
        }
    </script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
</body>
</html>

