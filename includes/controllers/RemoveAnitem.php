<?php 
class RemoveAnItem extends Controller{
    public static function removeItem(){
        $eid =$_GET['eid'];

        $mid =$_GET['mid'];
        self::query("DELETE from cart where medicine_id ='$mid' and emp_id ='$eid'");
        header('Location: cart?eid='.$eid.'');
        //echo $eid." ".$mid;
    }

    }


?>