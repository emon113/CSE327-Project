<?php
    /**
    * @brief Controller class. Create view for all controller.
    */
    class Controller extends Database{

        /**
        * @brief Create view for a specific page.
        * @param viewName To access the frontEnd file name.
        * @return Create of a specific page. 
        */
        public static function CreateView($viewName){
            require_once("./includes/views/$viewName.php");
            
        }

    }
?>