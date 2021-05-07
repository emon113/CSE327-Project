<?php 
class AboutUs extends Controller{
    public static function test(){
        $result = self::query("SELECT * from employees");
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