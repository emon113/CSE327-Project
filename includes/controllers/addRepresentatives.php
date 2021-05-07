<?php 
class addRepresentatives extends Controller{
    public static function test(){

        if(!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['phone_number']) && !empty($_POST['company_name'])){
            $first_name   =  $_POST['first_name'];
            $last_name =   $_POST['last_name'];
            $phone_number =   $_POST['phone_number'];
            $company_name =   $_POST['company_name'];

self::query("INSERT INTO representatives (first_name, last_name, phone_number, company_name)
values('$first_name', ' $last_name', '$phone_number', '$company_name')");
echo "<script>window.location.href='representatives'</script>";
       
        
        }

    }
}

?>