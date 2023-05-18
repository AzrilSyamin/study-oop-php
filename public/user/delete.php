<?php
require_once __DIR__ . "/../../Model/Users.php";

use Model\Users;

$user = new Users;
$id[] = $_GET["id"];
if ($user->destroy($id) > 0) {
  header("location:show.php");
} else {
  echo "Failed";
}
