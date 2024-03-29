<?php
  require_once 'database.php';
  require_once 'product.php';
  require_once 'dvd_disc.php';
  require_once 'book.php';
  require_once 'furniture.php';

	class dbActions {
    protected $link;

    public function __construct(){
      $db = new Database();
      $db->__construct();
      $this->link = $db->connect();
    }

		public function getProducts() {
      $sql = "SELECT * FROM `product`";

      $result = mysqli_query($this->link, $sql);

      $products = mysqli_fetch_all($result, MYSQLI_ASSOC);

      return $products;
    }
    
    public function addProduct(){
      $sku = trim($_POST['sku']);

      $query = "SELECT * FROM product WHERE sku = '$sku'";

      $result = mysqli_query($this->link, $query);
        
      if(!mysqli_num_rows($result)){
          
        switch ($_POST["switcher"]) {
          case "disc":
            $product = new DVD_disc ($_POST['sku'], $_POST['name'], $_POST['price'], $_POST['disc']);
            $result = mysqli_query($this->link, $product->addDisc($product));
            break;
          case "book":
            $product = new Book ($_POST['sku'], $_POST['name'], $_POST['price'], $_POST['book']);
            $result = mysqli_query($this->link, $product->addBook($product));
            break;
          case "furniture":
            $product = new Furniture ($_POST['sku'], $_POST['name'], $_POST['price'], $_POST['height'].'x'.$_POST['width'].'x'.$_POST['lenght']);
            $result = mysqli_query($this->link, $product->addFurniture($product));
            break;
        }
      
        if ($result) {
          $insert_result = 'created';
        }
        else{
          $insert_result = 'fail';
        }
      }
      else {
        $insert_result = 'exit';
      }

      return $insert_result;
    }
    
    public function massDelete(){
      foreach($_POST['id'] as $id){
        $query = "DELETE FROM product WHERE id = '$id'";
      
        $result = mysqli_query($this->link, $query);
      }
      
      if ($result) {
        $delete_result = 'deleted';
      }
      else{
        $delete_result = 'fail';
      }
      
      return $delete_result;
    }
  }
?>