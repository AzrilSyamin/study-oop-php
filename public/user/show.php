<?php
require_once __DIR__ . "/../../Model/Users.php";

use Model\Users;

require_once __DIR__ . "/../template/header.php";
?>
<h3>User Lists</h3>
<a href="add.php">Add New User</a>
<table>
  <tr>
    <th>ID</th>
    <th>Nama User</th>
    <th>Phone Number</th>
    <th>Umur User</th>
    <th>Action</th>
  </tr>
  <?php foreach (Users::show() as $user) : ?>
    <tr>
      <td><?= $user["user_id"]; ?></td>
      <td><?= $user["user_name"]; ?></td>
      <td><?= $user["user_number"]; ?></td>
      <td><?= $user["user_age"]; ?></td>
      <td>
        <a href="edit.php?id=<?= $user["user_id"]; ?>">Edit</a>
        <a href="delete.php?id=<?= $user["user_id"]; ?>">Delete</a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>
<?php require_once __DIR__ . "/../template/footer.php"; ?>