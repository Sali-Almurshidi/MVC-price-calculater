<?php
declare(strict_types=1);

class HomepageController
{


    public function postIsset(){

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

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

}



