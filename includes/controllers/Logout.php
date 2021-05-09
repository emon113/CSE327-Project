<?php
    /**
    * @brief This class loads all relevent data related to home page.
    */
class Logout extends Controller {
       /**
    * @brief Loads all the data after View is executed
    * @param no parameters
    * @retval result - Data gets loaded on or from the page.
    */
    public static function run(){
        $deleteEid = new CrudModel();
        $deleteEid->deleteEid();
        header('location: Index.php');
    }

}

?>