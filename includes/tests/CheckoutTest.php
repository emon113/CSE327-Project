<?php 

use PHPUnit\Framework\TestCase;

/**
* @brief Test class for Checkout Functionality
*/
class CheckoutTest extends TestCase {

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
        if (strlen($customerPhone) == 11 && is_numeric($customerPhone)) {
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
    public function test_isValidName_ValidName_True() {
        $this->assertEquals(
            true,
            CheckoutTest::isValidName('Shihabur Rahman Samrat')
        );
    }

    public function test_isValidName_EmptyName_False() {
        $this->assertEquals(
            false,
            CheckoutTest::isValidName('')
        );
    }

    public function test_isValidName_NameWithSymbols_False() {
        $this->assertEquals(
            false,
            CheckoutTest::isValidName('%%%&Shiahbur Rahman..')
        );
    }

    public function test_isValidName_NameWithNumbers_False() {
        $this->assertEquals(
            false,
            CheckoutTest::isValidName('Ahad123 Al Abdullah')
        );
    }

    public function test_isValidPhone_ValidPhone_True() {
        $this->assertEquals(
            true,
            CheckoutTest::isValidPhone('01743795642')
        );
    }

    public function test_isValidPhone_PhoneNotNumeric_False(){
        $this->assertEquals(
            false,
            CheckoutTest::isValidPhone('abcdefghijk')
        );
    }
    public function test_isValidPhone_EmptyPhone_False() {
        $this->assertEquals(
            false,
            CheckoutTest::isValidPhone('')
        );
    }

    public function test_isValidPayment_CardPayment_True() {
        $this->assertEquals(
            true,
            CheckoutTest::isValidPayment('Card')
        );
    }

    public function test_isValidPayment_CashPayment_True() {
        $this->assertEquals(
            true,
            CheckoutTest::isValidPayment('Cash')
        );
    }
    public function test_isValidPayment_EmptyPayment_False() {
        $this->assertEquals(
            false,
            CheckoutTest::isValidPayment('')
        );
    }
    public function test_isValidPayment_InvalidPayment_False() {
        $this->assertEquals(
            false,
            CheckoutTest::isValidPayment('abcxyz')
        );
    }

}
?>