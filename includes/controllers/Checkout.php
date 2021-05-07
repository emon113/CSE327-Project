<?php

class Checkout extends Controller
{

    public static function doCheckout($customerName, $customerPhone, $paymentMethod)
    {
        $db = new Database();
        $eid = 0;
        $db->confirmCheckout($customerName, $customerPhone, $paymentMethod, $eid);
        echo "<script>window.location.href='medicines'</script>";
    }
    public static function printResult($result)
    {
        foreach ($result as $item) { ?>
            <tr>
                <td><?php echo $item[1]; ?></td>
                <td><?php echo $item[4]; ?></td>
                <td><?php echo $item[2]; ?></td>
                <td><?php echo $item[5]; ?></td>
            </tr>
        <?php }
    }
    public static function onPageLoad()
    {
        $tableName = 'cart';
        $checkout = new checkout();
        $db = new Database();
        $result = $db->getItems($tableName);
        $checkout->printResult($result);

        if (!empty($_POST['customerName']) && !empty($_POST['customerPhone']) && !empty($_POST['paymentMethod'])) {
            $customerName = $_POST['customerName'];
            $customerPhone = $_POST['customerPhone'];
            $paymentMethod = $_POST['paymentMethod'];
            $Checkout = new Checkout();
            $Checkout->doCheckout($customerName, $customerPhone, $paymentMethod);
        }
        
    }
}

?>