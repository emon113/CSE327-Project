<?php

class Checkout extends Controller
{
    public static function doCheckout($customerName ,$customerPhone, $paymentMethod){
        $eid = 0;
        $cartData = self::query("SELECT medicine_name, unit_price, quantity, subtotal_price FROM cart where emp_id = '$eid'");
        $totalPrice = 0;

        foreach($cartData as $item) {
            $totalPrice = $totalPrice + $item[5];
        }

        self::query("INSERT INTO orders (emp_id, order_date, total_price, customer_name, customer_phone, payment_method)
        values('$eid', CURRENT_DATE, '$totalPrice', '$customerName', '$customerPhone', '$paymentMethod')");

        self::query("INSERT INTO orderitem (order_id, emp_id, medicine_id, quantity, subtotal_price) SELECT
        (SELECT order_id from orders  order by order_id desc limit 1) , emp_id, medicine_id, quantity, subtotal_price from cart where emp_id = '$eid'");

        self::query("update medicines, cart set stock = stock - ifnull(quantity, 0) where medicines.medicine_id = cart.medicine_id AND cart.emp_id='$eid'");

        self::query("delete from cart where emp_id = '$eid'");

        echo "<script>window.location.href='medicines'</script>";
    }
    public static function printCheckout ($result) {
        foreach ($result as $item) { ?>
            <tr>
                <td><?php echo $item[0]; ?></td>
                <td><?php echo $item[1]; ?></td>
                <td><?php echo $item[2]; ?></td>
                <td><?php echo $item[3]; ?></td>
            </tr>
            <?php }
    }
    public static function doSomething()
    {
        $result = self::query("SELECT * FROM cart");
        $checkout = new checkout();
        $checkout->printCheckout($result);
        if(!empty($_POST['customerName']) && !empty($_POST['customerPhone']) && !empty($_POST['paymentMethod'])) {
            $customerName = $_POST['customerName'];
	        $customerPhone = $_POST['customerPhone'];
	        $paymentMethod = $_POST['paymentMethod'];
            $Checkout = new Checkout();
            $Checkout->doCheckout($customerName, $customerPhone, $paymentMethod);
        }
    }
}

?>