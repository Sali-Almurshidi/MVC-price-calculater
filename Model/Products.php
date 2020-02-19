<?php
declare(strict_types=1);

class Products
{
    private $id ;
    private $name ;
    private $description ;
    private  $price ;
    private $allProductsArray = array();

    /**
     * @return array
     */
    public function getAllProductsArray(): array
    {
        return $this->allProductsArray;
    }

  /*  /**
     * @param array $allProductsArray
*/
    public function setAllProductsArray(array $allProductsArray)
    {
        $this->allProductsArray = $allProductsArray;
    }

    /**
     * Products constructor.
     * @param $id
     * @param $name
     * @param $description
     * @param Float $price
     */
    /*public function __construct($id, $name, $description, Float $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }*/

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): int
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): string
    {
        $this->description = $description;
    }

    /**
     * @return Float
     */
    public function getPrice(): Float
    {
        return $this->price;
    }

    /**
     * @param Float $price
     */
    public function setPrice(float $price): float
    {
        $this->price = $price;
    }

    public function getProuductsArray()
    {

         return $this->allProductsArray =  $_SESSION["products"];
    }


    public function displayProductsName()
    {
        $this->getProuductsArray();

        foreach ( $this->allProductsArray as $key => $name) {
            echo ' <option value="' . $name->name . '"  href="#" id= "' . $key . '" > ' . $name->name . '</option>';
        }
    }

}
