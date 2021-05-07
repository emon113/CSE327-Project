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
        foreach ($result as $item) { ?>
            <tr>
                <td><?php echo $item[1]; ?></td>
                <td><?php echo $item[2]; ?></td>
                <td><?php echo $item[3]; ?></td>
                <td><?php echo $item[11]; ?></td>
                <td><?php echo $item[5]; ?></td>
                <td><?php echo $item[7]; ?></td>
                <td><?php echo $item[9]; ?></td>
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
}

?>