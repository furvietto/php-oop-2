<?php 
require_once __DIR__."/Card.php";
class User 
{
  protected $name;
  protected $lastname;
  protected $age;
  protected $mail;
  protected $address;  
  protected $phone_number;
  protected $card;

  public function __construct($name, $lastname, $age, $phone_number, $card) {
    $this->name = $name;
    $this->lastname = $lastname;
    $this->age = $age;
    $this->phone_number = $phone_number;
    $this->setCard($card);
    
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
   * Get the value of lastname
   */ 
  public function getLastname()
  {
    return $this->lastname;
  }

  /**
   * Set the value of lastname
   *
   * @return  self
   */ 
  public function setLastname($lastname)
  {
    $this->lastname = $lastname;

    return $this;
  }

  /**
   * Get the value of age
   */ 
  public function getAge()
  {
    return $this->age;
  }

  /**
   * Set the value of age
   *
   * @return  self
   */ 
  public function setAge($age)
  {
    $this->age = $age;

    return $this;
  }

  /**
   * Get the value of mail
   */ 
  public function getMail()
  {
    return $this->mail;
  }

  /**
   * Set the value of mail
   *
   * @return  self
   */ 
  public function setMail($mail)
  {
    $this->mail = $mail;

    return $this;
  }

  /**
   * Get the value of address
   */ 
  public function getAddress()
  {
    return $this->address;
  }

  /**
   * Set the value of address
   *
   * @return  self
   */ 
  public function setAddress($address)
  {
    $this->address = $address;

    return $this;
  }

  /**
   * Get the value of phone_number
   */ 
  public function getPhone_number()
  {
    return $this->phone_number;
  }

  /**
   * Set the value of phone_number
   *
   * @return  self
   */ 
  public function setPhone_number($phone_number)
  {
    $this->phone_number = $phone_number;

    return $this;
  }

  /**
   * Get the value of card
   */ 
  public function getCard()
  {
    return $this->card;
  }

  /**
   * Set the value of card
   *
   * @return  self
   */ 
  public function setCard(Card $card)
  {
    $this->card = $card;

    return $this;
  }
}
?>