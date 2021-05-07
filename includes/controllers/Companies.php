<?php

class Companies extends Controller
{

    public static function searchCompanies($query)
    {
        $db = new Database();
        $result = $db->searchItems('company', $query, 'company_name');
        $companies = new companies();
        $companies->printResult($result);
    }
    public static function printResult($result)
    {
        foreach ($result as $item) { ?>
            <tr>
                <td><?php echo $item[1]; ?></td>
                <td><?php echo $item[2]; ?></td>
                <td><?php echo $item[3]; ?></td>
                <td><?php echo $item[4]; ?></td>
            </tr>
            <?php }
    }
    public static function onPageLoad()
    {
        $tableName = 'company';
        if (!empty($_POST['query'])) {
            $query = $_POST['query'];
            $companies = new companies();
            $companies->searchCompanies($query);
        } else {
            $companies = new companies();
            $db = new Database();
            $result = $db->getItems($tableName);
            $companies->printResult($result);;
        }
    }
}

?>