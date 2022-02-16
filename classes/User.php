<?php 

class User 
{
  protected $name;
  protected $lastname;
  protected $age;
  protected $mail;
  protected $address;  
  protected $phone_number;

  public function __construct($name, $lastname, $age,$phone_number) {
    $this->name = $name;
    $this->lastname = $lastname;
    $this->age = $age;
    $this->phone_number = $phone_number;
}
}
?>