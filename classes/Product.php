<?php 

class Product 
{
  protected $name;
  protected $model;
  protected $price;
  protected $description;

  public function __construct($name, $lastname, $age,$phone_number) {
    $this->name = $name;
    $this->lastname = $lastname;
    $this->age = $age;
    $this->phone_number = $phone_number;
}
}
?>