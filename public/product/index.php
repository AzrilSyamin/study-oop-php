<?php
require_once __DIR__ . "/../../Model/Product.php";

use Model\Product;

require_once __DIR__ . "/../template/header.php";
?>
<h3>Product Lists</h3>
<a href="add.php">Add New Product</a>
<table>
  <tr>
    <th>ID</th>
    <th>Product Name</th>
    <th>Product Price</th>
    <th>Action</th>
  </tr>
  <?php foreach (Product::show() as $product) : ?>
    <tr>
      <td><?= $product["product_id"]; ?></td>
      <td><?= $product["product_name"]; ?></td>
      <td><?= $product["product_price"]; ?></td>
      <td>
        <a href="edit.php?id=<?= $product["product_id"]; ?>">Edit</a>
        <a href="delete.php?id=<?= $product["product_id"]; ?>">Delete</a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>