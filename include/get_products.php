<?php

function get_product() {

  global $link;

  $sql = "SELECT * FROM `product`";

  $result = mysqli_query($link, $sql);

  $products = mysqli_fetch_all($result, MYSQLI_ASSOC);

  return $products;
}
?>
