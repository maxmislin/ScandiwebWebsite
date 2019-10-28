<?php

require_once 'database.php';
require_once 'classes/product.php';
require_once 'classes/dvd_disc.php';
require_once 'classes/book.php';
require_once 'classes/furniture.php';

if (isset($_POST['sku'])) {

	$sku = trim($_POST['sku']);

	$query = "SELECT * FROM product WHERE sku = '$sku'";

	$result = mysqli_query($link, $query);

	if(!mysqli_num_rows($result)){
		switch ($_POST["switcher"]) {
			case "disc":
				$product = new DVD_disc ($_POST['sku'], $_POST['name'], $_POST['price'], $_POST['disc']);
				$result = mysqli_query($link, $product->addDisc($product));
				break;
			case "book":
				$product = new Book ($_POST['sku'], $_POST['name'], $_POST['price'], $_POST['book']);
				$result = mysqli_query($link, $product->addBook($product));
				break;
			case "furniture":
				$product = new Furniture ($_POST['sku'], $_POST['name'], $_POST['price'], $_POST['height'].'x'.$_POST['width'].'x'.$_POST['lenght']);
				$result = mysqli_query($link, $product->addFurniture($product));
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

	$header = 'Location: /?addProduct=';
	$header .= $insert_result;
	header($header);

}