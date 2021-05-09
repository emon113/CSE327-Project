<?php

/**
* @brief Controller for the Companies page
*/

class Companies extends Controller {

    /**
    * @brief Searches the companies and displays the result
    * @param query - The keyword to search 
    */

    public static function searchCompanies($query) {
        $searchModel = new SearchModel();
        $result = $searchModel->searchItems('company', $query, 'company_name');
        $companies = new companies();
        $companies->printResult($result);
    }

    /**
    * @brief Prints the result in a tabular form
    * @param result - The array to be printed
    */
    public static function printResult($result) {
        foreach ($result as $item) { ?>
            <tr>
                <td><?php echo $item[1]; ?></td>
                <td><?php echo $item[2]; ?></td>
                <td><?php echo $item[3]; ?></td>
                <td><?php echo $item[4]; ?></td>
            </tr>
<?php }
    }

    /**
    * @brief Loads the inital companies page
    * @brief Prints all the companies
    * @brief Grabs user input from the view (if any)
    */
    public static function onPageLoad() {
        $tableName = 'company';
        if (!empty($_POST['query'])) {
            $query = $_POST['query'];
            $companies = new companies();
            $companies->searchCompanies($query);
        } else {
            $companies = new companies();
            $db = new Database();
            $result = $db->getItems($tableName);
            $companies->printResult($result);
        }
    }
}

?>