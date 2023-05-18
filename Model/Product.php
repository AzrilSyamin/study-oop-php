<?php

namespace Model {

  require_once __DIR__ . "/../Helper/DB.php";

  use Helper\DB;

  class Product
  {
    public static function show()
    {
      return DB::show("products");
    }

    public static function findID($id)
    {
      return DB::findID("products", "product_id", $id);
    }

    public static function create($data = [])
    {
      $new_user[] = [
        "product_name" => $data["product_name"],
        "product_price" => $data["product_price"]
      ];
      foreach ($new_user as $data) {
        return DB::create("products", $data);
      }
    }

    public static function update($data = [], $id)
    {
      $new_user = [
        "product_name" => $data["product_name"],
        "product_price" => $data["product_price"]
      ];
      return DB::update("products", $new_user, "product_id", $id);
    }

    public static function destroy($id = [])
    {
      return DB::destroy("products", "product_id", $id);
    }
  }
}
