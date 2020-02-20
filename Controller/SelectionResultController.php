<?php
declare(strict_types=1);
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

class SelectionResultController
{

    private $resultArray = array ();

    /**
     * @return array
     */
    public function getResultArray(): array
    {
        return $this->resultArray;
    }

    /**
     * @param array $resultArray
     */
    public function setResultArray(array $resultArray): void
    {
        $this->resultArray = $resultArray;
    }

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

    public function countDiscount($id , $groupsArray){
        $name = null ;
        $discount = null;

        foreach ($groupsArray as $key=> $value){
            if ($id == $value->id){

                if(isset($value->variable_discount)){
                    $discount = $_SESSION['objectProduct']->getPrice() - (($_SESSION['objectProduct']->getPrice() / 100)*$value->variable_discount);
                }

                if(isset($value->fixed_discount)){
                    $discount = $_SESSION['objectProduct']->getPrice() - $value->fixed_discount ;
                }

                if($discount < 0) {
                    $discount = null;
                }

                $name= $value->name ;

                array_push($this->resultArray , ['name'=>$name , 'discount'=>$discount]);

                if(isset($value->group_id)){
                    $this->countDiscount($value->group_id , $groupsArray);
                }else{
                    $this->setResultArray($this->resultArray);
                }

            }
        }

    }


}
