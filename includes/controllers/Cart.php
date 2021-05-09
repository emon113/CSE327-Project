<?php 
    /**
    * @brief Cart class. Retrieve and show all the data for cart and print it to the views and it extebds to Controller class.
    */
class Cart extends Controller{
    /**
    * @brief A cart that showcase the medicines list and price added by a user.
    * @param  No parameter.
    * @return Prints the cart of the current user.
    */
    public static function cartP(){
        $eid =$_GET['eid']; /**< eid - Employee ID of the user */
        $result = self::query("SELECT * FROM cart where emp_id = '$eid'");   /**< result - Result retrived from database */
        $total =0; /**< total - Total price of the medicne added by the user, initially start with 0 */
        foreach($result as $item)
        {
            $total = $total + $item[5];
            ?>
        <tr>
            <td><?php echo $item[1]; ?></td> 
            <td><form action="removeanitem?eid=<?php echo $eid;?> &mid=<?php echo $item[0]; ?>" method="POST"><button>❌</button></form></td> 
            <td><?php echo $item[4] ; ?></td>
            <td><?php echo $item[2] ;?></td>
            <td><?php echo $item[5] ;?></td>
        </tr>
        <?php
        }
        ?>
        <tr>
        <td colspan=3></td>
        <td>Total Price</td>
        <td><?php echo $total;?></td>
       </tr>
       <tr>
        <td colspan=3></td>
        <td> <form action="clearcart?eid=<?php echo $eid?>" method="POST"><button class="button button1">Clear All</button></form> </td>
         <td> <form action="checkout.html?eid='.$eid.'" method="POST"><button class="button button2">Checkout</button></form> </td>
       </tr>
 
        <?php
    }
}


?>