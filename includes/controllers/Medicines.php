<?php

/**
* @brief Controller for the Medicines page
*/

class Medicines extends Controller {

    /**
    * @brief Searches the medicines and displays the result
    * @param query - The keyword to search in Medicines
    * @param searchby - The attribute of Medicines to search in, like companyName, generic etc.
    */
    public static function searchMedicines($query, $searchby) {

        $searchModel = new searchModel();
        $result = $searchModel->searchItems('medicines', $query, $searchby);
        $medicines = new medicines();
        $medicines->printResult($result);
    }

    /**
    * @brief Prints the result in a tabular form
    * @param result - The array to be printed
    */
    public static function printResult($result) {
        $getEid = new CrudModel();
        $eid = $getEid->getEid();
        foreach ($result as $item) { ?>
            <tr>
                <td><?php echo $item[1]; ?></td>
                <td><?php echo $item[2]; ?></td>
                <td><?php echo $item[3]; ?></td>
                <td><?php echo $item[11]; ?></td>
                <td><?php echo $item[5]; ?></td>
                <td><?php echo $item[7]; ?></td>
                <td><?php echo $item[9]; ?></td>
                <form action="addtocart?mid=<?php echo $item[0]; ?>" method="POST">
                    <td><input type="number" min ="0" class="quantity" name="quantity"; required></td>
                    <td><button type="submit">++</button> </td>
                </form>
            </tr>
            <?php 
            
            ?>

<?php   }
    }

    /**
    * @brief Loads the inital medicines page
    * @brief Prints all the medicines
    * @brief Grabs user input from the view (if any)
    */
    public static function onPageLoad() {
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