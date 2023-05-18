<?php
require_once __DIR__ . "/../../Model/Product.php";

use Model\Product;

if (isset($_POST["add"])) {
  if (Product::create($_POST) > 0) {
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
      <input type="text" name="product_name">
    </label>
  </div>
  <div class="input-group">
    <label>
      Product Price
      <input type="text" name="product_price">
    </label>
  </div>
  <div class="input-group">
    <button type="submit" name="add">Add</button>
  </div>
</form>