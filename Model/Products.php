<?php
declare(strict_types=1);

class Products
{
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
     * @param $price
     */

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
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return Float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param Float $price
     */
    public function setPrice(float $price)
    {
        $this->price = $price;
    }


}
