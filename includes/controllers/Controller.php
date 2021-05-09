<?php

/**
* @brief Parent controller that creates the view
*/

class Controller extends Database {
    
    /**
    * @brief Loads all the view pages
    * @param viewName - file/view name
    */
    public static function CreateView($viewName) {
        require_once("./includes/views/$viewName.php");
    }
}
?>
