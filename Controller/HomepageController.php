<?php
declare(strict_types = 1);


class HomepageController
{

    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        //this is just example code, you can remove the line below
        $user = new User('John Smith');

        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.

        //load the view

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["submit"])) {

                if (isset($_POST["Product"]) && isset ($_POST["Customer"] ) ) {
                    $_SESSION["product ID:"] = $_POST["Product"];
                    $_SESSION["customer ID:"] = $_POST["Customer"];

                }


                echo ("test");
            }
        }

        require 'View/homepage.php';
    }

    public function displayProductsName(){
        $allData = new User();
        $allProductsArray = $allData->getAllProducts();

        //var_dump($allProductsArray);


      foreach ($allProductsArray as $key => $name ){
          echo ' <option value="'.$name->name.'"  href="#" id= "'.$key.'" > '.$name->name. '</option>';


        }

    }

    public function displayCustomerName(){
        $allData = new User();
        $allCustomerArray = $allData->getAllProducts();
        //var_dump($allProductsArray);
        foreach ($allCustomerArray as $key => $name ){
            echo ' <option  href="#" id= "'.$key.'" > '.$name->name. '</option>';
        }
    }

}
if (isset($_POST["refresh"])) {
    header("refresh");
    session_destroy();
}

