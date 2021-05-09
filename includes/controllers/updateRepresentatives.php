<?php
/**
    * @brief This class takes updated representatives data.
    */
class UpdateRepresentatives extends Controller{
        /**
    * @brief Loads all the data after View is executed
    * @param no parameters
    * @retval result - Data gets loaded on or from the page.
    */
    public static function run(){
        $repID = $_GET['mid'];


        $row = self::query("SELECT * from representatives where rep_id = '$repID'");
        foreach ($row as $value) { ?>

            <div class="main">

                <h2 class="name"><?php echo $value[1]; ?></h2>
                <h2 class="name"><?php echo $value[2]; ?></h2>
                <h2 class="name"><?php echo $value[3]; ?></h2>
                <h2 class="name"><?php echo $value[4]; ?></h2>

            </div>
<?php

        }
    }
}

?>