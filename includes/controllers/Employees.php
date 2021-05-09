<?php 
    /**
    * @brief Employees class. Do stuffs to print the employee information and it extebds to Controller class.
    */
class Employees extends Controller{
    /**
    * @brief An employee list of the pharmacy with update and delete button.
    * @param No parameter.
    * @return prints the employee list in a tabular form.
    */
    public static function employee(){
        $result = self::query("SELECT * from employees"); /**< result - Result retrived from database */
        foreach($result as $item)
        {?>
        <tr>
            
            <td><?php echo $item[1]." ".$item[2]; ?></td>
            <td><?php echo $item[3] ;?></td>
            <td><?php echo $item[5] ; ?></td>
            <td><?php echo $item[8] ;?></td>
            <td><?php echo $item[9] ;?></td>
            <td><?php echo '<form action="updateEmployeeM.php?mid='.$item[0].'" method="POST"><button type="submit">Details</button></form>' ?></td>
            <td><?php echo '<form action="updateEmployeeM.php?mid='.$item[0].'" method="POST"><button type="submit">Delete</button></form>' ?></td>
        </tr>
      
        <?php

        }

    }
}

?>