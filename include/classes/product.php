<?php
class Product {
  private $sku;
  private $name;
  private $price;
  public $type;

  //Constructor
  public function __construct(string $sku, string $name, string $price, String $type){
    $this->sku = $sku;
    $this->name = $name;
    $this->price = $price;
    $this->type = $type;
  }

  //Get Sku function
  public function getSku() {
    return $this->sku;
  }

  //Get Name function
  public function getName() {
    return $this->name;
  }

  //Get Price function
  public function getPrice() {
    return $this->price;
  }

  //Get Type function
  public function getType() {
    return $this->type;
  }
  
}
?>