<?php

require_once __DIR__."/Product.php";

class Category extends Product
{
    protected $name_product;
    protected $price;

    public function __construct($name_product,$name, $price, $description)
  {
    parent::__construct($name, $description);

    $this->name_product = $name_product;
    $this->price = $price;
  }

    /**
     * Get the value of name_product
     */ 
    public function getName_product()
    {
        return $this->name_product;
    }

    /**
     * Set the value of name_product
     *
     * @return  self
     */ 
    public function setName_product($name_product)
    {
        $this->name_product = $name_product;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }
}

?>