<?php declare(strict_types=1);

use AddToCart as GlobalAddToCart;
use PHPUnit\Framework\TestCase;

final class AddToCartTest extends TestCase
{
    public function testcheckifTheQuantityIsAvailabeOrNot(): void
    {
        $test = new test_AddToCart_checkStock_True;
        $result = $test->checkStock(20,10);

        $this->assertEquals(true, $result);

    }
    public function test_if_The_Medicine_IsAlready_Added_Or_Not(): void
    {
        $test = new test_AddToCart_checkStock_True;
        $added = true;
        $result2 = $test->isAlreadyAdded($added);
        $this->assertEquals(true, $result2);
    }



}

final class test_AddToCart_checkStock_True{
    public static function checkStock($stock, $quantity)
    {
       
        if($stock >= $quantity)
        {
            return true;
        }
        else {
            return false;
        }
    }
    public static function isAlreadyAdded($result)
    {
        if(!empty($result))
        {
            return true;
        }
        else {
            return false;
        }
    }
}