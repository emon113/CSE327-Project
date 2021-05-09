<?php
/**
    * @brief This class containts functionality of calculating sales .
    */
class SalesAnalysis extends Database {

        /**
    * @brief This function calls the query fuction to get all the data.
    * @param totalSale -Total made till now
    * @param medInvestmrnt -Total purchase price of all the medicines present in the pharmacy. 
    * @return Integer 
    * @retval result - Information about all the representatives in the database
    */
    public static function cal($totalSale,$medInvestment) {
        if($totalSale>$medInvestment){
            return 0;
        }

        return $medInvestment - $totalSale;
    }


}

?>