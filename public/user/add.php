<?php
require_once __DIR__ . "/../../Model/Users.php";

use Model\Users;

if (isset($_POST["tambah"])) {;
  if (Users::create($_POST) > 0) {
    header("location:show.php");
  } else {
    echo "Failed";
  }
}

require_once __DIR__ . "/../template/header.php";
?>

<h3>Add New User</h3>
<a href="show.php">Back</a>
<form action="" method="post">
  <div class="input-group">
    <label>
      User name
      <input type="text" name="user_name">
    </label>
  </div>
  <div class="input-group">
    <label>
      Phone Number
      <input type="text" name="phone_number">
    </label>
  </div>
  <div class="input-group">
    <label>
      Age
      <input type="text" name="user_age">
    </label>
  </div>
  <div class="input-group">
    <button type="submit" name="tambah">Tambah</button>
  </div>
</form>
<?php require_once __DIR__ . "/../template/footer.php"; ?>