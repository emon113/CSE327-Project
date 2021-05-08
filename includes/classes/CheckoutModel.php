<?php

/**
* @brief Model for Checkout Functionality
*/
class CheckoutModel extends Database {
    
    /**
    * @brief Queries the database and updates the tables
    * @brief Inserts the checkout data into orders table
    * @brief Inserts the checkout data into orderitem table
    * @brief Updates the stock in the medicines table
    * @brief Clears the cart table at the end
    * @param customerName - Name of the customer
    * @param customerPhone - Phone number of the customer
    * @param paymentMethod - Payment method chosen by the customer
    * @param eid - Employee who is performing the sales
    */
    public static function confirmCheckout($customerName, $customerPhone, $paymentMethod, $eid) {
        $cartData = self::query("SELECT * FROM cart where emp_id = '$eid'");
        $totalPrice = 0;
        foreach ($cartData as $item) {
          $totalPrice = $totalPrice + $item[5];
        }
        self::query("INSERT INTO orders (emp_id, order_date, total_price, customer_name, customer_phone, payment_method)
            values('$eid', CURRENT_DATE, '$totalPrice', '$customerName', '$customerPhone', '$paymentMethod')");
    
        self::query("INSERT INTO orderitem (order_id, emp_id, medicine_id, quantity, subtotal_price) SELECT
            (SELECT order_id from orders  order by order_id desc limit 1) , emp_id, medicine_id, quantity, subtotal_price from cart where emp_id = '$eid'");
    
        self::query("update medicines, cart set stock = stock - ifnull(quantity, 0) where medicines.medicine_id = cart.medicine_id AND cart.emp_id='$eid'");
    
        self::query("delete from cart where emp_id = '$eid'");
      }
}

?>