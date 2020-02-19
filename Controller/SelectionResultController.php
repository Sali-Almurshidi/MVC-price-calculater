<?php
declare(strict_types=1);
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

class SelectionResultController
{
    public function getSelectProduct($name , $productsArray)
    {
        foreach($productsArray as $key => $value) {
            if ($value->name == $name) {

                $_SESSION['objectProduct']->setName($value->name);
                $_SESSION['objectProduct']->setDescription($value->description);
                $_SESSION['objectProduct']->setPrice($value->price);
                break;
            }
        }

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


}
