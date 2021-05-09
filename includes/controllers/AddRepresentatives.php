<?php 
    /**
    * @brief This class takes new representatives data.
    */
class AddRepresentatives extends Controller{
        /**
    * @brief Loads all the data after View is executed
    * @param no parameters
    * @retval result - Data gets loaded on or from the page.
    */
    public static function run(){

        if(!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['phone_number']) && !empty($_POST['company_name'])){
            $firstName = $_POST['first_name'];
            $lastName = $_POST['last_name'];
            $phoneNumber = $_POST['phone_number'];
            $companyName = $_POST['company_name'];
            
            $db = new CrudModel();
        
            $db->addData($firstName,$lastName,$phoneNumber,$companyName);

echo "<script>window.location.href='representatives'</script>";
        
        }

    }
}

?>