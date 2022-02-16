<?php 

class Card
{
    protected $name_user;
    protected $expiration_date;
    protected $cvv;
    protected $number;

    public function __construct($name_user, $expiration_date, $cvv, $number) {
        $this->name_user = $name_user;
        $this->expiration_date = $expiration_date;
        $this->cvv = $cvv;
        $this->number = $number;
        
    }

    /**
     * Get the value of name_user
     */ 
    public function getName_user()
    {
        return $this->name_user;
    }

    /**
     * Set the value of name_user
     *
     * @return  self
     */ 
    public function setName_user($name_user)
    {
        $this->name_user = $name_user;

        return $this;
    }

    /**
     * Get the value of expiration_date
     */ 
    public function getExpiration_date()
    {
        return $this->expiration_date;
    }

    /**
     * Set the value of expiration_date
     *
     * @return  self
     */ 
    public function setExpiration_date($expiration_date)
    {
        $this->expiration_date = $expiration_date;

        return $this;
    }

    /**
     * Get the value of cvv
     */ 
    public function getCvv()
    {
        return $this->cvv;
    }

    /**
     * Set the value of cvv
     *
     * @return  self
     */ 
    public function setCvv($cvv)
    {
        $this->cvv = $cvv;

        return $this;
    }

    /**
     * Get the value of number
     */ 
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set the value of number
     *
     * @return  self
     */ 
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }
}

?>
