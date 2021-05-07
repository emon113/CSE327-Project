<?php 
class Cart extends Controller{
    public static function cartP(){
        $eid =$_GET['eid'];
        $result = self::query("SELECT * FROM cart where emp_id = '$eid'");
        $total =0;
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