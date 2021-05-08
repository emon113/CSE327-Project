<?php 
class AddRepresentatives extends Controller{
    public static function test(){

        if(!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['phone_number']) && !empty($_POST['company_name'])){
            $firstName = $_POST['first_name'];
            $lastName = $_POST['last_name'];
            $phoneNumber = $_POST['phone_number'];
            $companyName = $_POST['company_name'];

self::query("INSERT INTO representatives (first_name, last_name, phone_number, company_name)
values('$firstName', ' $lastName', '$phoneNumber', '$companyName')");
echo "<script>window.location.href='representatives'</script>";
        
        }

    }
}

?>