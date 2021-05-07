<?php 
class Sales extends Controller{
    public static function sale(){
        $result = self::query("SELECT * from orderitem o, medicines m, employees e where o.medicine_id = m.medicine_id and e.emp_id=o.emp_id and e.emp_id=o.emp_id");
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