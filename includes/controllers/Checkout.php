<?php

/**
* @brief Controller for the Checkout page
*/

class Checkout extends Controller {

    /**
    * @brief Intiates the checkout by communicating with the database
    * @brief Redirects to the medicines page upon completion
    * @param customerName - Name of the customer
    * @param customerPhone - Phone number of the customer
    * @param paymentMethod - Payment method chosen by the customer
    */
    public static function doCheckout($customerName, $customerPhone, $paymentMethod) {
        $checkoutModel = new CheckoutModel();
        $eid = 0;
        $checkoutModel->confirmCheckout($customerName, $customerPhone, $paymentMethod, $eid);
        echo "<script>window.location.href='medicines'</script>";
    }

    /**
    * @brief Prints the result in a tabular form
    * @param result - The array to be printed
    */
    public static function printResult($result) {
        foreach ($result as $item) { ?>
            <tr>
                <td><?php echo $item[1]; ?></td>
                <td><?php echo $item[4]; ?></td>
                <td><?php echo $item[2]; ?></td>
                <td><?php echo $item[5]; ?></td>
            </tr>
<?php }
    }
    /**
    * @brief Loads the inital checkout page
    * @brief Prints all the items added in cart
    * @brief Grabs user input from the view
    */
    public static function onPageLoad() {
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