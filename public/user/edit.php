<?php
require_once __DIR__ . "/../../Model/Users.php";

use Model\Users;

$id = $_GET["id"];
$user = Users::findID($id);

if (isset($_POST["edit"])) {;
  if (Users::update($_POST, $id) > 0) {
    header("location:show.php");
  } else {
    echo "Failed";
  }
}

require_once __DIR__ . "/../template/header.php";
?>
<h3>Edit User</h3>
<a href="show.php">Back</a>
<form action="" method="post">
  <div class="input-group">
    <label>
      User name
      <input type="text" name="user_name" value="<?= $user["user_name"]; ?>">
    </label>
  </div>
  <div class="input-group">
    <label>
      Phone Number
      <input type="text" name="phone_number" value="<?= $user["user_number"]; ?>">
    </label>
  </div>
  <div class="input-group">
    <label>
      Age
      <input type="text" name="user_age" value="<?= $user["user_age"]; ?>">
    </label>
  </div>
  <div class="input-group">
    <button type="submit" name="edit">Edit</button>
  </div>
</form>
<?php require_once __DIR__ . "/../template/footer.php"; ?>