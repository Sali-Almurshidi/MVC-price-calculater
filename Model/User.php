<?php
declare(strict_types=1);

class User
{
    private $allProductsArray = [];
    private $allCustomersArray = [];
    private $allGroupsArray = [];

    // to get all the customer information
    public function getAllCustomers()
    {
        $allCustomers = file_get_contents("Database/customers.json");
        $this->allCustomersArray = json_decode($allCustomers);
        return $this->allCustomersArray;

    }
    // to get all the products information
    public function getAllProducts()
    {
        $allProducts = file_get_contents("Database/products.json");
        $this->allProductsArray = json_decode($allProducts);
        return $this->allProductsArray;
    }

    public function getAllGroups(){
        $allGroups = file_get_contents("Database/groups.json");
        $this->allGroupsArray = json_decode($allGroups);
        return $this->allGroupsArray;
    }
}
