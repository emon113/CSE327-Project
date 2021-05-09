<?php 
    /**
    * @brief This class sends repId of representative that needs to be deleted.
    */
class DeleteComplete extends Controller{
        /**
    * @brief Loads all the data after View is executed
    * @param no parameters
    * @retval result - Data gets loaded on or from the page.
    */
    public static function run(){

        $repID = $_GET['mid'];

        $db = new CrudModel();
        
        $result = $db->deleteData($repID);
       echo "<script>window.location.href='representatives'</script>";
       
          
        
        }

    }


?>