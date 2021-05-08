<?php 
class DeleteComplete extends Controller{
    public static function test(){

        $repID = $_GET['mid'];

        self::query("Delete from representatives where rep_id='$repID'");
       echo "<script>window.location.href='representatives'</script>";
       
          
        
        }

    }


?>