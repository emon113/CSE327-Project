<?php 
    /**
    * @brief This class contains the control part of showing representatives data.
    */
class Representatives extends Controller{
    /**
    * @brief Loads all the data after View is executed
    * @param no parameters
    * @retval result - Data gets loaded on or from the page.
    */
    public static function run(){
        $db = new CrudModel();
        
        $result = $db->fetchData();
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