<?php
declare(strict_types=1);

class User
{
    private $name;

 /*   public function __construct(string $name)
    {
        $this->name = $name;
    }*/

    public function getName(): string
    {
        return $this->name;
    }
    // to get all the customer information
    public function getAllCustomers()
    {
        $allCustomers = file_get_contents("Database/customers.json");
        $allCustomersArray = json_decode($allCustomers);
       // var_dump($allCustomersArray);
        return $allCustomersArray;

    }
    // to get all the products information
    public function getAllProducts()
    {
        $allProducts = file_get_contents("Database/products.json");
        $allProductsArray = json_decode($allProducts);
        //date(var_dump($allProductsArray));
        return $allProductsArray;
    }
}