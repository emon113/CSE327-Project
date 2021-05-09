<?php 
    /**
    * @brief RemoveAnItem class. Do stuffs to remove an item from cart and it extebds to Controller class.
    */
class RemoveAnItem extends Controller{
    /**
    * @brief Remove one item after clicking the remove button of that item.
    * @param No, parameter. 
    * @return Remove one item at a single click.. 
    */
    public static function removeItem(){

        $getEid = new CrudModel();
        $employeeId = $getEid->getEid();

        $medicineId =$_GET['mid']; /**< medicineId - Medicine ID of the user */
        $model = new AddToCartModel(); /**< An object of AddToCartModel Class */
        $model->removeAnItem($employeeId, $medicineId);
        
        header('Location: cart?eid='.$employeeId.'');
        //echo $eid." ".$mid;
    }

    }


?>