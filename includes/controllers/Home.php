<?php
    /**
    * @brief This class loads all relevent data related to home page.
    */
class Home extends Controller {
       /**
    * @brief Loads all the data after View is executed
    * @param no parameters
    * @retval result - Data gets loaded on or from the page.
    */
    public static function run(){?>

<div class="info">

        <div>
           <?php
           
           $result = self::query("select sum(total_price) as tol from orders;");
           foreach($result as $value){               
            echo $value[0]  ;  }             
          ?>
       </div>

       <div>
           <?php
           
           $result = self::query("select count(*) as 'co' from company;");
           foreach($result as $value){               
            echo $value[0] ;  }             
          ?>
       </div>

       <div>
           <?php
           
           $result = self::query("select count(D.Dif) as no from (SELECT DATEDIFF(expiry_date,CURDATE()) AS Dif from medicines) as D where Dif<=0;");
           foreach($result as $value){               
            echo $value[0] ;  }             
          ?>
       </div>



       <div>
           <?php
           $temp1 = self::query("select sum(total_price) as tol from orders;");
           $temp2 = self::query("select sum(purchase_price) from medicines;");

            foreach($temp1 as $value){               
            $totalSales= $value[0] ;  } 

           foreach($temp2 as $value2){               
           $medInsvesment=  $value2[0] ;  } 
           $salesNeeded = new salesAnalysis();   
           $result = $salesNeeded->cal( $totalSales,$medInsvesment);

            echo'Sales Needed to Break Even: ';           
            echo $result ;  
           
           
                      
          ?>
       </div>



       </div>
          
          <?php                               
          
        
        
        }
        
  
}
?>