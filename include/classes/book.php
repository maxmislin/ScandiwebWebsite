<?php
class Book extends Product{
  //Constructor
  public function __construct(string $sku,string $name,string $price,string $type){
    parent::__construct($sku, $name, $price, $type);
    $this->setType($type);
  }

  public function setType($weight) {
    $this->type ='Weight: '.$weight." KG";
  }
  
  public function addBook(Product $product) {
    $sku = $product->getSku();
    $name = $product->getName();
    $price = $product->getPrice();
    $type = $product->getType();
    $insert_query ="INSERT INTO product (sku, name, price, type) VALUES ('$sku', '$name', '$price', '$type')";
    return $insert_query;
  }
}
?>