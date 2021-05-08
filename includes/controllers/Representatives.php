<?php 
class Representatives extends Controller{
    public static function run(){
        $result = self::query("select rep_id,concat(first_name,' ',last_name) AS fname,representatives.phone_number,company_name from representatives");
        foreach($result as $value){?>
        <tr>       
            <td><?php echo $value[1] ; ?></td>
            <td><?php echo $value[2] ;?></td>
            <td><?php echo $value[3] ; ?></td>
            <td><?php echo '<form action="updateRepresentatives?mid='.$value[0].'" method="POST"><button type="submit">Update</button></form>' ?></td>
            <td><?php echo '<form action="deleteRepresentatives?mid='.$value[0].'" method="POST"><button type="submit">Delete</button></form>' ?></td>
        </tr>
      
        <?php



        }

    }
}

?>