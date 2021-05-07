<?php

class Database
{
  public static $host = "127.0.0.1";
  public static $dbname = "phr";
  public static $username = "root";
  public static $password = "";

  private static function con()
  {
    $pdo = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$dbname . ";charset=utf8", self::$username, self::$password);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
  }
  public static function query($query, $params = array())
  {
    $stmt = self::con()->prepare($query);
    $stmt->execute($params);
    $data = $stmt->fetchAll();
    return $data;
  }
  public static function confirmCheckout($customerName, $customerPhone, $paymentMethod, $eid)
  {
    $db = new Database();
    $cartData = $db->query("SELECT * FROM cart where emp_id = '$eid'");
    $totalPrice = 0;
    foreach ($cartData as $item) {
      $totalPrice = $totalPrice + $item[5];
    }
    $db->query("INSERT INTO orders (emp_id, order_date, total_price, customer_name, customer_phone, payment_method)
        values('$eid', CURRENT_DATE, '$totalPrice', '$customerName', '$customerPhone', '$paymentMethod')");

    $db->query("INSERT INTO orderitem (order_id, emp_id, medicine_id, quantity, subtotal_price) SELECT
        (SELECT order_id from orders  order by order_id desc limit 1) , emp_id, medicine_id, quantity, subtotal_price from cart where emp_id = '$eid'");

    $db->query("update medicines, cart set stock = stock - ifnull(quantity, 0) where medicines.medicine_id = cart.medicine_id AND cart.emp_id='$eid'");

    $db->query("delete from cart where emp_id = '$eid'");
  }

  public static function getItems($tableName)
  {
    $db = new Database();
    $result = $db->query("SELECT * FROM $tableName");
    return $result;
  }
  public static function searchItems($tableName, $query, $searchby)
  {
    $db = new Database();
    $result = $db->query("SELECT * FROM $tableName where $searchby like '%$query%'");
    return $result;
  }
}
?>