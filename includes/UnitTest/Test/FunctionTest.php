<?php

/**
    * @brief This class is the unit testing class to test the cal function.
    */

class FunctionTest extends \PHPUnit\Framework\TestCase
{
  public function testAdd(){


      $calculation = new test_SalesAnalysis_cal_int;
      $result =$calculation->cal(10,50);
      $this->assertEquals(40,$result);

      $calculation2 = new test_SalesAnalysis_cal_int;
      $result2 =$calculation2->cal(50,10);
      $this->assertEquals(0,$result2);

  }

}
/**
    * @brief This class represent the SalesAnalysis class for unit test.
    */
class test_SalesAnalysis_cal_int {

public static function cal($totalSale,$medInvestment) {
  if($totalSale>$medInvestment){
      return 0;
  }

  return $medInvestment - $totalSale;
}


}

?>