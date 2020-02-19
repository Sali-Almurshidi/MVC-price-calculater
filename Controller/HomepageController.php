<?php
declare(strict_types=1);

class HomepageController
{

    /**
     * @return array
     */
    public function getSelectProduct($name , $productsArray)
    {
        $found = null;
        foreach($productsArray as $key => $value) {
            if ($value->name == $name) {
                $found = $key;
                break;
            }
        }
        return $found ;
    }

    public function getCustomerGroubID($name , $customersArray)
    {
        $found = null;
        foreach($customersArray as $key => $value) {
            if ($value->name == $name) {
                $found = $key;
                break;
            }
        }
       return  $found ;
    }

    public function getGroupId($id, $groupArray) {
        $result = null;
        foreach ($groupArray as $key => $value) {
            if ($id == $value->id) {
                $result = $value->group_id;
                break;

            }
        }
        echo "<br/>".$result;
    }

    





    //render function with both $_GET and $_POST vars available if it would be needed.
/*    public function render(array $GET, array $POST)
    {


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
    }*/
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



