<?php 
    /**
    * @brief ClearCart class. Do stuffs to clear the cart and it extebds to Controller class.
    */
class ClearCart extends Controller{
    /**
    * @brief Clear the car at a single click..
    * @param No, parameter. 
    * @return Clears the whole cart at a time. 
    */
    public static function clearAll(){
        $getEid = new CrudModel();
        $eid = $getEid->getEid();
        $model = new AddToCartModel(); /**< model - An object of AddToCartModel Class */
        $model->clearCart($eid); /**< result - Result retrived from database */
        header('Location: cart');
    }
    }
?>