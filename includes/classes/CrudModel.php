<?php
/**
    * @brief This class contains all functions of the Crud opperation.
    */
class CrudModel extends Database {
    /**
    * @brief This function calls the query fuction to get all the data.
    * @param no parameters
    * @return Array 
    * @retval result - Information about all the representatives in the database
    */
    public static function fetchData() {
        $result = self::query("select rep_id,concat(first_name,' ',last_name) AS fname,representatives.phone_number,company_name from representatives");
        return $result;
    }

        /**
    * @brief This function calls the query fuction to get all the data.
    * @param no parameters
    * @return Array 
    * @retval result - All the medicines that are down minimum stock
    */
    public static function fetchData2() {
        $result = self::query("SELECT * from medicines where stock<stock_minimum");
        return $result;
    }
/**
    * @brief This function calls the query fuction to insert all the data.
    * @param firstName - First name of the representative.
    * @param lastName - Last name of the representative.
    * @param phoneNumber - Phone Number of the representative.
    * @param companyName - Company Name of the representative.
    * @retval result - Adds new representatives information into the database
    */
   public static function addData($firstName, $lastName, $phoneNumber, $companyName) {
    self::query("INSERT INTO representatives (first_name, last_name, phone_number, company_name) values('$firstName', ' $lastName', '$phoneNumber', '$companyName')");
    }

    /**
    * @brief This function calls the query fuction to delete a specific representative.
    * @param repID - Unique ID of the representative.
    * @retval result - Deletes a specific representative information from the database
    */
   public static function deleteData($repID) {
    self::query("Delete from representatives where rep_id='$repID'");
    
}

/**
    * @brief This function calls the query fuction to update a specific representative information.
    * @param repID - Unique ID of the representative.
    * @param phone - New phone number of the representative.
    * @retval result - Updates a specific representative information from the database
    */

public static function updateData($repID,$phone) {
    self::query("UPDATE representatives SET phone_number = '$phone' WHERE rep_id = '$repID'");
    
}
    public static function getEid() {
    $eid = self::query("select eid from log");
    foreach($eid as $item) {
        $employeeId = $item[0];
    }
    return $employeeId;
    }
    
    public static function deleteEid() {
        self::query("truncate log");
    }

}

?>