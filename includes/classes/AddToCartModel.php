<?php
    /**
    * @brief A class that handles all query related to add to cart functionality and it extebds to Database class..
    */
class AddToCartModel extends Database {
    /**
    * @brief Perform query for to update the cart if samemedicine were previously added.
    * @param quantity - Quantity of medicine that user wants.
    * @param  medicineId - Id of a specific medicine to update the quantity of  that medicine to the cart.
    * @param employeeId - Id of the employee who added the medicine into the cart.
    * @return Update the cart with new quantity of a medicne that is previously added.
    */
    public static function updateCart($quantity, $employeeId, $medicineId) {
        self::query("UPDATE cart set quantity = quantity + '$quantity', subtotal_price = subtotal_price + (unit_price * '$quantity') WHERE emp_id = '$employeeId' and medicine_id ='$medicineId'");
    }
     /**
    * @brief Perform query to retrieve the medicine name, retail price of a medicine..
    * @param  medicineId - Id of a specific medicine to find that from database.
    * @return Medicine name and retail price of a meidicne.
    */
    public static function medicineDetails($medicineId){
        return self::query("SELECT medicine_name, retail_price from medicines where medicine_id = '$medicineId'");
    }
    /**
    * @brief Perform query for to update the cart if samemedicine were previously added.
    * @param  medicineId - Id of a specific medicine to add that to the cart.
    * @param  medicineName - Name of a specific medicine to add that to the cart.
    * @param  price - Price of a specific medicine to add that to the cart.
    * @param employeeId - Id of the employee who added the medicine into the cart.
    * @param quantity - Quantity of medicine that user wants.
    * @param subTotal - Total price of a specific medicine for a specific quantity.
    * @return INSERT a meidicne with it's relevent information,  quantity and who sold it to the cart into the database.
    */
    public static function insertIntoCart($medicineId,$medicineName, $price, $employeeId, $quantity, $subtotal){
        self::query("INSERT INTO cart VALUES ('$medicineId', '$medicineName','$price','$employeeId','$quantity','$subtotal')");
    }
    /**
    * @brief Perform query to retrieve the stock of a medicine..
    * @param  medicineId - Id of a specific medicine's stock to find that from database.
    * @return Stock of that meidicne.
    */
    public static function findStock($medicineId){
        return self::query("SELECT stock FROM medicines where medicine_id = '$medicineId'");
    }
    /**
    * @brief Perform query to check if that medicine is previously added or not.
    * @param  medicineId - Id of a specific medicine to update the quantity of  that medicine to the cart.
    * @param employeeId - Id of the employee who added the medicine into the cart.
    * @return Return all information of that medicine from the cart table if that's available.
    */
    public static function isAdded($medicineId, $employeeId){
        return self::query("SELECT * FROM cart where medicine_id = '$medicineId' and emp_id = '$employeeId'");
    }
    /**
    * @brief Perform query to find quamtity of a  medicine that is added to the cart.
    * @param  medicineId - Id of a specific medicine find that medicine in the cart.
    * @param employeeId - Id of the employee who added the medicine into the cart.
    * @return Return quantity of that medicine from the cart table if that's available.
    */
    public static function findQuantity($medicineId,$employeeId){
        return self::query("SELECT quantity FROM cart where medicine_id = '$medicineId' and emp_id = '$employeeId'");
    }  
    /**
    * @brief Perform query to delete all from the cart.
    * @param  employeeId - Id of a specific medicine to find that from database.
    * @return Delete all infortaion from cart for that specific employee.
    */

    public static function clearCart($employeeId) {
        self::query("DELETE from cart where  emp_id ='$employeeId'");
    } 
    /**
    * @brief Perform query to delete a medicine from the cart.
    * @param  employeeId - Id of a specific medicine to find that from database.
    * @param  medicineId - Id of a specific medicine find that medicine in the cart.
    * @return Delete a infortaion of a speicific medicne from cart for specific employee.
    */
    public static function removeAnItem($employeeId, $medicineId) {
        self::query("DELETE from cart where medicine_id ='$medicineId' and emp_id ='$employeeId'");  
    } 
}

?>