<?php 
    /**
    * @brief This class contains the control part of showing Shortage medicine data.
    */
class Shortage extends Controller{
    /**
    * @brief Loads all the data after View is executed
    * @param no parameters
    * @retval result - Data gets loaded on or from the page.
    */
    public static function run(){
        $db = new CrudModel();
        
        $result = $db->fetchData2();
        foreach($result as $value){?>
        <tr>       
            <td><?php echo $value[1] ; ?></td>
            <td><?php echo $value[2] ;?></td>
            <td><?php echo $value[3] ; ?></td>
            <td><?php echo $value[5] ;?></td>
            <td><?php echo $value[7] ;?></td>
            <td><?php echo $value[8] ;?></td>
            
            
        </tr>
      
        <?php



        }

    }
}

?>