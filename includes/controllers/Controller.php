<?php

/**
* @brief Parent controller that creates the view
*/

class Controller extends Database {
    public static function CreateView($viewName) {
        require_once("./includes/views/$viewName.php");
    }
}
?>