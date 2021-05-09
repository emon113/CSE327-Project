<?php
/**
    * @brief This is the model class.
    * @brief All the intarection and connection to the data base is done through this class. 
    */
class Database {
    public static $host="localhost";
    public static $dbName = "phr";
    public static $username="root";
    public static $password="";
    
/**
    * @brief Connection to the data base is established through this function
    * @param no parameters
    * @retval result - Connents to the Database
    */
    private static function con() {

    $pdo = new PDO("mysql:host=".self::$host.";dbname=".self::$dbName.";charset=utf8",self::$username, self::$password);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
  }
  /**
    * @brief All the database query goes to the database through this function
    * @param query - The sql query.
    * @retval result - Results of the query if any.
    */
  public static function query($query, $params = array()) {
    $stmt = self::con()->prepare($query);
    $stmt->execute($params);
    $data = $stmt->fetchAll();
    return $data;
  }

}
?>
  




