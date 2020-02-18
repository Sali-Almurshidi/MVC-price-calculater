<?php
declare(strict_types=1);


class HomepageController
{


    /**
     * @return array
     */
    public function getAllProductsArray(): array
    {
        return $this->allProductsArray;
    }

    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {


        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["refresh"])) {
                header("refresh");
                session_destroy();
            }

            if (isset($_POST["submit"])) {

                if (($_POST["Product"] != '') && ($_POST["Customer"] != '')) {
                    $_SESSION["productID"] = $_POST["Product"];
                    $_SESSION["customerID"] = $_POST["Customer"];
                    // move to next page
                    header("Location: http://pricecalculator.local/View/selectionresult.php ");
                } else {
                    echo "Select the Product name and the Customer Name";
                }

            }
        }


        require 'View/homepage.php';
    }



    public function getCustomerInfo() {
        $allData = new User();
        $allCustomerArray = $allData->getAllCustomers();

        
    }
}



