<?php
require_once __DIR__ . "/../../Model/Product.php";

use Model\Product;

$id[] = $_GET["id"];
if (Product::destroy($id) > 0) {
  header("location:index.php");
} else {
  echo "Failed";
}
