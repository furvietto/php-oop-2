<?php 
require_once __DIR__."/User.php";
class PremiumUser extends User
{
    
    protected $sconto;
    protected $model;

    public function __construct($model,$name, $lastName,$age,$card)
  {
    parent::__construct($name, $lastName,$age,$card);

    $this->setModel($model);
  

  }

    /**
     * Get the value of sconto
     */ 
    public function getSconto()
    {
        return $this->sconto;
    }

    /**
     * Set the value of sconto
     *
     * @return  self
     */ 
    public function setSconto($sconto)
    {
        $this->sconto = $sconto;

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
        if ($model == "bronze") {
            $this->sconto = 40;
            $this->model = $model;
        }elseif ($model == "argent") {
            $this->sconto = 50;
            $this->model = $model;
        }elseif ($model == "gold") {
            $this->sconto = 60;
            $this->model = $model;
        }
        return $this;
    }
}

?>