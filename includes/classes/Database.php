<?php

/**
* @brief Model class to communicate with the database
*/

class Database {

  public static $host = "127.0.0.1";
  public static $dbname = "phr";
  public static $username = "root";
  public static $password = "";

  /**
  * @brief Sets up the initial connection with the database
  */
  private static function con() {
    $pdo = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$dbname . ";charset=utf8", self::$username, self::$password);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
  }

  public static function query($query, $params = array()) {
    $stmt = self::con()->prepare($query);
    $stmt->execute($params);
    $data = $stmt->fetchAll();
    return $data;
  }

  /**
  * @brief Queries the database and selects all tuples from a table
  * @param tableName - The database table to run the query on
  * @retval result - Array consisting of the query results
  */
  public static function getItems($tableName) {
    $db = new Database();
    $result = $db->query("SELECT * FROM $tableName");
    return $result;
  }
}