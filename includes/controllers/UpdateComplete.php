<?php 
class UpdateComplete extends Controller{
    public static function test(){
        $repID = $_GET['mid'];
        $phone = $_POST['phone'];

        self::query("UPDATE representatives SET phone_number = '$phone' WHERE rep_id = '$repID'");
        echo "<script>window.location.href='representatives'</script>";
    }

}
