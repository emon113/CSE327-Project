<?php 
/**
    * @brief This class sends repId and new phone number of representative that needs to be updated.
    */
class UpdateComplete extends Controller{
        /**
    * @brief Loads all the data after View is executed
    * @param no parameters
    * @retval result - Data gets loaded on or from the page.
    */
    public static function run(){
        $repID = $_GET['mid'];
        $phone = $_POST['phone'];

        $db = new CrudModel();
        
         $db->updateData($repID,$phone);
        echo "<script>window.location.href='representatives'</script>";
    }

}
