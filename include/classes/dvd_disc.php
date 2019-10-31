<?php
class DVD_disc extends Product {
  //Constructor
  public function __construct(string $sku,string $name,string $price, string $type){
    parent:: __construct($sku, $name, $price, $type);
    $this->setType($type);
  }
  
  public function setType($size) {
    $this->type = 'Size: ' .$size." MB"  ;
  }

  public function addDisc(Product $product) {
    
    $sku = $product->getSku();
    $name = $product->getName();
    $price = $product->getPrice();
    $type = $product->getType();
    $insert_query ="INSERT INTO product (sku, name, price, type) VALUES ('$sku', '$name', '$price', '$type')";
	  //$result = mysqli_query($link, $insert_query);
    return $insert_query;
  }
}
?>