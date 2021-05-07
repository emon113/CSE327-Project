<?php 
class ClearCart extends Controller{
    public static function clearAll(){
        $eid =$_GET['eid'];
        self::query("DELETE from cart where  emp_id ='$eid'");
        header('Location: cart?eid='.$eid.'');
        //echo $eid." ".$mid;
    }
    }
?>