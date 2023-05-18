<?php

namespace Config {

  use PDO;

  class Database
  {
    public static function getConnection()
    {
      $host = "localhost";
      $user = "ariel";
      $pass = "";
      $dbName = "study_oop";

      return new PDO("mysql:host=$host;dbname=$dbName", $user, $pass);
    }
  }
}
