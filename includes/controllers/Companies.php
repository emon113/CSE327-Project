<?php

class Companies extends Controller
{
    public static function searchCompanies($query)
    {
        $result = self::query("SELECT * FROM Company where company_name like '%$query%'");
        $companies = new companies();
        $companies->printCompanies($result);
    }
    public static function printCompanies($result) {
        foreach ($result as $item) { ?>
            <tr>
                <td><?php echo $item[1]; ?></td>
                <td><?php echo $item[2]; ?></td>
                <td><?php echo $item[3]; ?></td>
                <td><?php echo $item[4]; ?></td>
            </tr>
            <?php }
    }
    public static function doSomething()
    {
        if (!empty($_POST['query'])) {
            $query = $_POST['query'];
            $companies = new companies();
            $companies->searchCompanies($query);
        } else {
            $result = self::query("SELECT * FROM company");
            $companies = new companies();
            $companies->printCompanies($result);
        }
    }
}

?>