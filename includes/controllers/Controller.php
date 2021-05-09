<?php
/**
    * @brief This class contains the path and function of our View part.
    * @brif It is also the parent class of all the controller files. 
    */
class Controller extends Database {
    /**
    * @brief Loads all the view pages
    * @param viewName - file name
    * @retval result -view pages
    */
public static function createView($viewName){
    require_once './includes/views/'.$viewName.'.php';   
    
}


}
?>