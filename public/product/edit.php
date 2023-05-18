<?php
require_once __DIR__ . "/../../Model/Product.php";

use Model\Product;

$id = $_GET["id"];
$product = Product::findID($id);
if (isset($_POST["edit"])) {
  if (Product::update($_POST, $id) > 0) {
    header("location:index.php");
  } else {
    echo "Failed";
  }
}
?>
<h3>Add New product</h3>
<a href="index.php">Back</a>
<form method="post" action="">
  <div class="input-group">
    <label>
      Product Name
      <input type="text" name="product_name" value="<?= $product["product_name"]; ?>">
    </label>
  </div>
  <div class="input-group">
    <label>
      Product Price
      <input type="text" name="product_price" value="<?= $product["product_price"]; ?>">
    </label>
  </div>
  <div class="input-group">
    <button type="submit" name="edit">Edit</button>
  </div>
</form>