<?php declare(strict_types=1);

use AddToCart as GlobalAddToCart;
use PHPUnit\Framework\TestCase;

final class AddToCartTest extends TestCase{
    /**
    * @brief Tests if checkStock function works or not.
    */
    public function testcheckifTheQuantityIsAvailabeOrNot(): void{
        $test = new test_AddToCart_checkStock_True;
        $result = $test->checkStock(20,10);

        $this->assertEquals(true, $result);

    }
    /**
    * @brief Tests if isAlreadyAdded function works or not.
    */
    public function test_if_The_Medicine_IsAlready_Added_Or_Not(): void{
        $test = new test_AddToCart_checkStock_True;
        $added = true;
        $result2 = $test->isAlreadyAdded($added);
        $this->assertEquals(true, $result2);
    }
    /**
    * @brief Tests if newQuantity function works or not.
    */
    public function test_find_new_Quantity_and_its_Validity_int(): void{
        $test = new test_AddToCart_checkStock_True;
        $added = true;
        $result = $test->newQuantity(25,10,12);
        $this->assertEquals(22, $result);
    }
}
final class test_AddToCart_checkStock_True{
    public static function checkStock($stock, $quantity)
    {
       
        if($stock >= $quantity){
            return true;
        }
        else {
            return false;
        }
    }
    public static function isAlreadyAdded($result)
    {
        if(!empty($result)){
            return true;
        }
        else {
            return false;
        }
    }
    public static function newQuantity($stock,$quantity,$oldQuantity)
    {
        $newQuantity = $oldQuantity +$quantity;
        if($stock > $newQuantity ){
            return $newQuantity;
        }
        else {
            return false;
        }
    }
}