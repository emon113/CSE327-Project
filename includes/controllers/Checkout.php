<?php

class Checkout extends Controller
{
    public static function doCheckout($customerName ,$customerPhone, $paymentMethod){
        $eid = 0;
        $cartData = self::query("SELECT medicine_name, unit_price, quantity, subtotal_price FROM cart where emp_id = '$eid'");
        $totalPrice = 0;
        self::query("INSERT INTO orders (emp_id, order_date, total_price, customer_name, customer_phone, payment_method)
        values('$eid', CURRENT_DATE, '10', '$customerName', '$customerPhone', '$paymentMethod')");

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