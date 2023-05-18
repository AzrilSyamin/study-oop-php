<?php

namespace Model {

  require_once __DIR__ . "/../Helper/DB.php";

  use Helper\DB;

  class Users
  {
    public static function show()
    {
      return DB::show("users");
    }

    public static function findID($id)
    {
      return DB::findID("users", "user_id", $id);
    }

    public static function create($data = [])
    {
      $new_user[] = [
        "user_name" => $data["user_name"],
        "user_number" => $data["phone_number"],
        "user_age" => $data["user_age"]
      ];
      foreach ($new_user as $data) {
        return DB::create("users", $data);
      }
    }

    public static function update($data = [], $id)
    {
      $new_user = [
        "user_name" => $data["user_name"],
        "user_number" => $data["phone_number"],
        "user_age" => $data["user_age"]
      ];
      return DB::update("users", $new_user, "user_id", $id);
    }

    public static function destroy($id = [])
    {
      return DB::destroy("users", "user_id", $id);
    }
  }
}
