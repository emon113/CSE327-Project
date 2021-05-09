<?php 
    /**
    * @brief Sales class. Do stuffs to print the sales information and it extebds to Controller class.
    */
class Sales extends Controller{
    /**
    * @brief A page with all the information related to sale.
    * @param No parameter
    * @return Prints the sales information in a tabular form.
    */
    public static function sale(){
        $result = self::query("SELECT * from orderitem o, medicines m, employees e where o.medicine_id = m.medicine_id and e.emp_id=o.emp_id and e.emp_id=o.emp_id"); /**< result - Result retrived from database */
        foreach($result as $item)
        {?>
        <tr>
            <td><?php echo $item[1]; ?></td>
            <td><?php echo $item[7] ;?></td>
            <td><?php echo $item[10] ; ?></td>
            <td><?php echo $item[8] ;?></td>
            <td><?php echo $item[4] ;?></td>
            <td><?php echo $item[5] ; ?></td>
            <td><?php echo $item[19]." ".$item[20];?></td>

            
        </tr>
      
        <?php

        }

    }
}

?>