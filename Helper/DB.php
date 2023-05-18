<?php

namespace Helper {

  require_once __DIR__ . "/../Config/Database.php";

  use Config\Database;

  class DB
  {
    public static function show($table)
    {
      $conn = Database::getConnection();
      $stat = $conn->prepare("SELECT * FROM $table");
      $stat->execute();

      foreach ($stat as $con) {
        $result[] = $con;
      }
      $stat = null;
      return $result;
    }

    public static function findID($table, $column, $id)
    {
      $conn = Database::getConnection();
      $stat = $conn->prepare("SELECT * FROM $table WHERE $column = $id");
      $stat->execute();

      foreach ($stat as $con) {
        $result = $con;
      }
      $stat = null;
      return $result;
    }

    public static function create($table, $data = [])
    {
      foreach ($data as $k => $v) {
        $key[] = $k;
        $value[] = "'" . $v . "'";
      }

      $key = implode(",", $key);
      $value = implode(",", $value);

      $conn = Database::getConnection();
      $stat = $conn->prepare("INSERT INTO $table ($key) VALUES ($value)");
      $stat->execute();
      return $stat->rowCount();
    }

    public static function update($table, $data = [], $column, $id)
    {
      $conn = Database::getConnection();

      foreach ($data as $k => $v) {
        $result[] = $k . " = '" . $v . "'";
      }

      $result = implode(",", $result);

      $stat = $conn->prepare("UPDATE $table SET 
              $result
              WHERE $column IN ($id)");
      $stat->execute();
      return $stat->rowCount();
    }

    public static function destroy($table, $column, $id = [])
    {
      $conn = Database::getConnection();
      $id = implode(",", $id);

      $stat = $conn->prepare("DELETE FROM $table WHERE $column IN ($id)");
      $stat->execute();

      return $stat->rowCount();
    }
  }
}
