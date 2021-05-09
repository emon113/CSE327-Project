<?php

/**
* @brief Controller for the Checkout page
*/

class Checkout extends Controller {

    /** 
    * @brief Checks whether the customer name is valid or not
    * @param customerName - Name of the customer 
    * @retval true - Customer name is valid
    * @retval false - Customer name is invalid
    */
    public static function isValidName($customerName) {
        if ($customerName == NULL) {
            return false;
        }
        if (!preg_match("/^[a-zA-Z-' ]*$/", $customerName)) {
            return false;
        } else {
            return true;
        }
    }

    /** 
    * @brief Checks whether the customer phone number is valid or not
    * @param customerPhone - Phone number of the customer 
    * @retval true - Customer phone number is valid
    * @retval false - Customer phone number  is invalid
    */
    public static function isValidPhone($customerPhone) {
        if ($customerPhone == NULL) {
            return false;
        }
        if (strlen($customerPhone) == 11 && is_numeric($customerPhone) == true) {
            return true;
        } else {
            return false;
        }
    }

    /** 
    * @brief Checks whether the selected payment method is valid or not
    * @param paymentMethod - Payment method selected by the customer 
    * @retval true - Payment method is valid, i.e, Cash/Card
    * @retval false - Customer phone number  is invalid
    */
    public static function isValidPayment($paymentMethod) {
        if ($paymentMethod == NULL) {
            return false;
        }
        if (strcmp(strtolower($paymentMethod), 'cash') == 0 || strcmp(strtolower($paymentMethod), 'card') == 0) {
            return true;
        } else {
            return false;
        }
    }
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
<?php   }
    }
    /**
     * @brief Loads the inital checkout page
     * @brief Prints all the items added in cart
     * @brief Grabs user input from the view (if any)
     */
    public static function onPageLoad() {
        $tableName = 'cart';
        $checkout = new checkout();
        $db = new Database();
        $result = $db->getItems($tableName);
        $checkout->printResult($result);

        if (!empty($_POST['paymentMethod'])) {
            $customerName = $_POST['customerName'];
            $customerPhone = $_POST['customerPhone'];
            $paymentMethod = $_POST['paymentMethod'];
            if ($checkout->isValidName($customerName) == true && $checkout->isValidPhone($customerPhone) == true && $checkout->isValidPayment($paymentMethod) == true) {
                $Checkout = new Checkout();
                $Checkout->doCheckout($customerName, $customerPhone, $paymentMethod);
            } else {
                echo
                "<script>
                    alert('Invalid input');
                    window.location.href= 'checkout';
                </script>";
            }
        }
    }
}

?>