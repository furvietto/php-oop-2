<?php 

class Product 
{
  protected $name;
  protected $model;
  protected $price;
  protected $description;

  public function __construct($name, $model, $price,$description) {
    $this->name = $name;
    $this->model = $model;
    $this->price = $price;
    $this->description = $description;
}

  /**
   * Get the value of name
   */ 
  public function getName()
  {
    return $this->name;
  }

  /**
   * Set the value of name
   *
   * @return  self
   */ 
  public function setName($name)
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Get the value of model
   */ 
  public function getModel()
  {
    return $this->model;
  }

  /**
   * Set the value of model
   *
   * @return  self
   */ 
  public function setModel($model)
  {
    $this->model = $model;

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

  /**
   * Get the value of description
   */ 
  public function getDescription()
  {
    return $this->description;
  }

  /**
   * Set the value of description
   *
   * @return  self
   */ 
  public function setDescription($description)
  {
    $this->description = $description;

    return $this;
  }
}
?>