<?php
declare(strict_types=1);
session_start();
//require '../Model/User.php';

class HomepageController
{
    private $allProductsArray = [];

    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        //this is just example code, you can remove the line below
        $user = new User('John Smith');

        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.

        //load the view

        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {

            if (isset($_POST["submit"]))
            {

                if (($_POST["Product"] != null) && ($_POST["Customer"] != null))
                {
                    $_SESSION["productID"] = $_POST["Product"];
                    $_SESSION["customerID"] = $_POST["Customer"];
                    // move to next page
                    header("Location: http://pricecalculator.local/View/selectionresult.php ");
                }

                else {
                    echo "Select the Product name and the Customer Name";
                }

            }
        }


        require 'View/homepage.php';
    }

    /*public function getProuductsArray()
    {

        displayProductsName();
    }*/

    public function displayProductsName()
    {
        $allData = new User();
        $this->allProductsArray = $allData->getAllProducts();
        foreach ($this->allProductsArray as $key => $name) {
            echo ' <option value="' . $name->name . '"  href="#" id= "' . $key . '" > ' . $name->name . '</option>';

        }

    }

    public function displayCustomerName()
    {
        $allData = new User();
        $allCustomerArray = $allData->getAllCustomers();
        //var_dump($allProductsArray);
        foreach ($allCustomerArray as $key => $name) {
            echo ' <option  href="#" id= "' . $key . '" > ' . $name->name . '</option>';
        }
    }


    public function getCustomerInfo() {
        $allData = new User();
        $allCustomerArray = $allData->getAllCustomers();

        
    }
}

if (isset($_POST["refresh"])) {
    header("refresh");
    session_destroy();
}

