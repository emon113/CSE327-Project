<?php
class Medicines extends Controller
{
    

    public static function searchMedicines($query, $searchby)
    {
        
        $result = self::query("SELECT * FROM Medicines where $searchby like '%$query%'");
        $medicines = new medicines();
        $medicines->printMedicines($result);
    }
    public static function printMedicines($result) {
        $eid =$_GET['eid'];
        foreach ($result as $item) { ?>
            <tr>
                <td><?php echo $item[1]; ?></td>
                <td><?php echo $item[2]; ?></td>
                <td><?php echo $item[4]; ?></td>
                <td><?php echo $item[3]; ?></td>
                <td><?php echo $item[6]; ?></td>
                <td><?php echo $item[8]; ?></td>
                <td><?php echo $item[10]; ?></td>
                <form action="addtocart?eid=<?php echo $eid;?> &mid=<?php echo $item[0]; ?>" method="POST">
                     <td><input type="number" min ="0" class="quantity" name="quantity"; required></td>
                     <td><button type="submit">++</button> </td>
                </form>
            </tr>
            
            <?php }
    }
    public static function doSomething()
    {
        if (!empty($_POST['query'])) {
            $query = $_POST['query'];
            $searchby =  $_POST['searchby'];
            $medicines = new medicines();
            $medicines->searchMedicines($query, $searchby);
        } else {
            $result = self::query("SELECT * FROM MEDICINES");
            $medicines = new medicines();
            $medicines->printMedicines($result);
        }
    }

    public static function addtocart(){
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
            if($stock > $quantity){
                $result2 = self::query("SELECT medicine_name, retail_price from medicines where medicine_id = '$mid'");
                foreach($result2 as $item)
                {
                    $medicineName = $item[0];
                    $price = $item[1];
                    $subtotal = (float)$price * (float)$quantity;
                }
                self::query("INSERT INTO cart VALUES ('$mid', '$medicineName','$price','$eid','$quantity','$subtotal')");
                header('Location: medicinesM.html?eid='.$eid.'');
            }
            else{
                echo "<script>
        alert('Insufficient stock!');
        window.location.href= 'medicinesP.html?eid=$eid';
        </script>";
            }
        }
    }
}
    

?>