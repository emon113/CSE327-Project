<?php 
    /**
    * @brief AddToCart class. Consist all the logic part of add to cart functionality and it extebds to Controller class.
    */
class AddToCart extends Controller{
    /**
    * @brief Add medicine with desired quantity, price in the cart
    * @param No parameter
    * @result Medicine will be add to cart if requested quantity is available
    */
    public static function addtocart2(){
        $getEid = new CrudModel();
        $eid = $getEid->getEid();
        $mid =$_GET['mid']; /**< mid - Medicine ID of the medicine that user want to add to the cart */
        $quantity = $_POST['quantity']; /**< quantity -Quantity of the medicine that user want to add to the cart */
        $add = new AddToCart(); /**< add - An object of AddToCart Class */
        $isAdded = new AddToCart(); /**< An object of AddToCart Class */
        $new = new AddToCart(); /**< isAdded - An object of AddToCart Class */
        $model = new AddToCartModel(); /**< model - An object of AddToCart Class */
        if($isAdded->isAlreadyAdded($mid, $eid))
        {
            $newQuantityAfterAdding = $new->newQuantity($quantity,$mid, $eid); /**< newQuantityAfterAdding - New quantity after adding the medicine again in the cart */
            if($add->checkStock($mid, $newQuantityAfterAdding))
            {
                $model->updateCart($quantity,$eid,$mid);
                header('Location: medicines?eid='.$eid.'');
            }
            else{
                echo "<script>
                alert('Insufficient stock!');
                window.location.href= 'medicines?eid=$eid';
                </script>";
            }
            
            
        }    
        elseif(!empty($_POST['quantity']))
        {
            

            $status =$add->checkStock($mid, $quantity);
            if($status){
                $result2 = $model->medicineDetails($mid); /**< result2 - An object of AddToCart Class */
                foreach($result2 as $item)
                {
                    $medicineName = $item[0]; /**< medicnename -  Medicine name of the medicine retrived from database */
                    $price = $item[1]; /**< price - Price of the medicine retrived from database */
                    $subtotal = (float)$price * (float)$quantity; /**< subtotal - Sub total Price after calculating. */
                }
                $model->insertIntoCart($mid,$medicineName, $price, $eid, $quantity, $subtotal);
                header('Location: medicines');
            }
            else{
                echo "<script>
                        alert('Insufficient stock!');
                        window.location.href= 'medicines';
                     </script>";
            }
        }
        else{

        }
    }
        /**
    * @brief Compare the desire quantity and the actual stock of a medicine.
    * @param medicineId - To check the stock of that specific medicine.
    * @param quantity - Requested quantity to compare with stock.
    * @return Will Return true if the requested quantity is availabe or flase otherwise.
    */
    public static function checkStock($medicineId, $quantity)
    {
        $model = new AddToCartModel(); /**< model - An object of AddToCart Class */
        $result = $model->findStock($medicineId); /**< result - Result retrived from database */
        foreach($result as $item)
        {
            $stock = $item[0]; /**< stock - Stock retrived from database */
        }
       
        if($stock >= $quantity)
        {
            return true;
        }
        else {
            return false;
        }
    }
    /**
    * @brief Check if the medicine already added to the cart ot not.
    * @param medicineId - To check the if that specific medicine is already on the cart or not.
    * @param employeeId - To find the cart of that specific employee.
    * @return Will Return true if that medicine is already added or flase otherwise.
    */
    public static function isAlreadyAdded($medicineId, $employeeId){
        $model = new AddToCartModel(); /**< model - An object of AddToCart Class */
        $result = $model->isAdded($medicineId, $employeeId); /**< result - Result retrived from database */
        if(!empty($result)){
            return true;
        }
        else {
            return false;
        }
    }
    /**
    * @brief Check if the medicine already added to the cart ot not.
    * @param quantity - Requested quantity to add ti the cart.
    * @param medicineId - To find the previous quantity added to the cart.
    * @param employeeId - To find the cart of that specific employee.
    * @return Will Return new quantity after adding the same medicine to the cart.
    */
    public static function newQuantity($quantity, $medicineId,$employeeId){
        $model = new AddToCartModel(); /**< model - An object of AddToCart Class */
        $result = $model->findQuantity($medicineId,$employeeId); /**< result - Result retrived from database */
        foreach($result as $item){
            $stock = $item[0];
        }
        return $quantity + $stock;
    }
}
?>