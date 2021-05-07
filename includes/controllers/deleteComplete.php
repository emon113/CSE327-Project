<?php 
class deleteComplete extends Controller{
    public static function test(){

        $ridp = $_GET['mid'];

        self::query("Delete from representatives where rep_id='$ridp'");
       echo "<script>window.location.href='representatives'</script>";
       
          
        
        }

    }


?>