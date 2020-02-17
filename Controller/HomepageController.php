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
        require 'View/homepage.php';
    }

    public function displayProductsName(){

        $allData = new User();
        $allProductsArray = $allData->getAllProducts();
        var_dump($allProductsArray);
        foreach ($allProductsArray as $key => $name ){
         // echo ' <a  href="#" id= ".$key." > '.$name["name"]. '</a>';
            echo $name['name'];
        }
    }

    public function displayCustomerName(){

    }
}