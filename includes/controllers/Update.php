<?php 
class Update extends Controller{
    public static function updateM(){
        $result = self::query("select * from medicines");
        foreach($result as $item)
        {?>
        <tr>
            <td><?php echo $item[1]; ?></td>
            <td><?php echo $item[2] ;?></td>
            <td><?php echo $item[6] ; ?></td>
            <td><?php echo $item[8] ;?></td>
            <td><?php echo $item[4] ;?></td>
            <td><?php echo '<form action="updateMedicine?mid='.$item[0].'" method="POST"><button type="submit">Details</button></form>' ?></td>
            <td><?php echo '<form action="deleteMedicine?mid='.$item[0].'" method="POST"><button type="submit">Delete</button></form>' ?></td>
        </tr>
      
        <?php

        }

    }
}

?>