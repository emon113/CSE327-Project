<?php 
class AddToCart extends Controller{
    public static function addtocart2(){
        $eid =$_GET['eid'];

        $mid =$_GET['mid'];
        if(!empty($_POST['quantity']))
        {
            $quantity = $_POST['quantity'];
            $result = self::query("SELECT stock FROM medicines where medicine_id = '$mid'");
            foreach($result as $item)
            {
                $stock = $item[0];
            }
            if($stock >= $quantity){
                $result2 = self::query("SELECT medicine_name, retail_price from medicines where medicine_id = '$mid'");
                foreach($result2 as $item)
                {
                    $medicineName = $item[0];
                    $price = $item[1];
                    $subtotal = (float)$price * (float)$quantity;
                }
                self::query("INSERT INTO cart VALUES ('$mid', '$medicineName','$price','$eid','$quantity','$subtotal')");
                header('Location: medicines?eid='.$eid.'');
            }
            else{
                echo "<script>
                        alert('Insufficient stock!');
                        window.location.href= 'medicines?eid=$eid';
                     </script>";
            }
        }
    }

    }


?>