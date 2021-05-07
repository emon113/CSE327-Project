<?php

class Medicines extends Controller
{

    public static function searchMedicines($query, $searchby)
    {
        $db = new Database();
        $result = $db->searchItems('medicines', $query, $searchby);
        $medicines = new medicines();
        $medicines->printResult($result);
    }

    public static function printResult($result)
    {
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
    public static function onPageLoad()
    {
        $tableName = 'medicines';
        if (!empty($_POST['query'])) {
            $query = $_POST['query'];
            $searchby =  $_POST['searchby'];
            $medicines = new medicines();
            $medicines->searchMedicines($query, $searchby);
        } else {
            $medicines = new medicines();
            $db = new Database();
            $result = $db->getItems($tableName);
            $medicines = new medicines();
            $medicines->printResult($result);
        }
    }
}

?>