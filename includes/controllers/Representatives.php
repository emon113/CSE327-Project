<?php 
class Representatives extends Controller{
    public static function test(){


           
             
            
            
          

        $result = self::query("select rep_id,concat(first_name,' ',last_name) AS fname,representatives.phone_number,company_name from representatives");
        foreach($result as $item)
        {?>
        <tr>
            
            <td><?php echo $item[1] ; ?></td>
            <td><?php echo $item[2] ;?></td>
            <td><?php echo $item[3] ; ?></td>
            <td><?php echo '<form action="updateRepresentatives?mid='.$item[0].'" method="POST"><button type="submit">Update</button></form>' ?></td>
            <td><?php echo '<form action="deleteRepresentatives?mid='.$item[0].'" method="POST"><button type="submit">Delete</button></form>' ?></td>
        </tr>
      
        <?php



        }

    }
}

?>