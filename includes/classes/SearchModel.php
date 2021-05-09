<?php

/**
* @brief Model class for Search Functionality
*/
class SearchModel extends Database {
    
    /**
    * @brief Queries the database and searches all tuples from a table
    * @brief Selects all the tuples that match the keyword
    * @param tableName - The database table to run the query on
    * @param query - The keyword to search
    * @param searchby - The attribute in which the keyword will be searched
    * @retval result - Array consisting of the query results
    */
    public static function searchItems($tableName, $query, $searchby) {
        $result = self::query("SELECT * FROM $tableName where $searchby like '%$query%'");
        return $result;
    }
}

?>